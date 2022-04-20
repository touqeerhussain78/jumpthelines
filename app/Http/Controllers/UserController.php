<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\UserService;
use App\Models\User;
use App\Traits\StripePayment;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;

class UserController extends Controller
{

    use StripePayment;

    public function about_us(){
        return view('user.about-us');
    }

    public function home()
    {
        return view('user.home');
    }
    
    public function contact()
    {
        return view('user.contact');
    }

    public function service_category()
    {
        $categories = Category::get();
        return view('user.service-category',compact('categories',$categories));
    }

    public function service_listing()
    {
        
        $services = Service::get();
        return view('user.service-listing', compact('services', $services));
    }

    public function login()
    {
        return view('user.login');
    }

    public function service_detail($id) {

        $service = Service::with('category')->where('id',$id)->first();
        return view('user.service-detail', compact('service', $service));
    }

    public function  enquiry_detail($id) {

        $service = Service::with('category')->where('id', $id)->first();
        return view('user.enquiry-form', compact('service', $service));
    }

    public function book_service(Request $request){

        UserService::create($request->all());
        return redirect()->back()->with('success', "Service Request Create Successfully");
    }

    public function enquiry_form_log() {
        
        $user_service = UserService::with('user','service.category')->where('user_id',Auth::user()->id)->get();
        return view('user.enquiry-form-log', compact('user_service', $user_service));
    }

    public function enquiry_form_submitted($id){

        $user_service = UserService::with('user', 'service.category')->where('id', $id)->first();
        return view('user.enquiry-form-submitted', compact('user_service', $user_service));
    }

    public function enquiry_log_filter(Request $request){

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $user_service_filter = UserService::with('user', 'service.category')->where('user_id', Auth::user()->id)
        ->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('user.enquiry-form-log', compact('user_service_filter', $user_service_filter));
    }

    public function reset_password()
    {
        return view('user.password-recovery-1');
    }

    public function user_forget_password(Request $request)
    {
        $email = $request->email;

        $user_check = User::where('email', $email)->get();
        if ($user_check->count() > 0) {

            $code = rand(100, 1000);
            $user = User::where('email', $email)->first();
            $user->code = $code;
            $user->save();
            if ($user) {
                $user_email = $request->email;
                $message = 'Verification Code is  ' . $code;
                try {
                    $link = "<a href='http://127.0.0.1:8000/verification_code/$email'>Link</a>";
                    Mail::raw("Verification Code is " . $code . " And The Link Is " . $link, function ($message) use ($user_email, $code) {
                        $message->to($user_email)
                            ->subject('Verification Code')->from('richardsteve979@gmail.com');
                    });
                } catch (\Exception $e) {
                }
                return redirect()->route('user_password_recovery', ['email' => $email]);
            }
        } else {
            return "no user found";
        }
    }

    public function user_password_recovery(){
        return view('user.password-recovery-2');
    }

    public function user_verifying_password(Request $request)
    {

        $code  = $request->code;
        $email  = $request->email;
        $user_check = User::where('code', $code)->where('email', $email)->first();
        if (isset($user_check)) {
            return redirect()->route('user_update_password', ['email' => $email]);
        } else {
            return 'wrong code';
        }
    }

    public function user_update_password(Request $request){
        return view('user.password-recovery-3');
    }

    public function user_update_password_save(Request $request)
    {

        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $password = $request->password;
        
        $email = $request->email;

        $user_check =  User::where('email', $email)->first();
        if ($user_check->count() > 0) {

            $user =  User::where('email', $email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login');
        }
    }

    public function pay(Request $request){

        
        // return $request->all();

        $stripe = $this->stripe($request->card_number, $request->expiry_date, $request->cvv, $request->charges);
        
        
        $user_request = UserService::where('id',$request->user_service_id)->first();
        UserService::where('id', $request->user_service_id)->update(['status'=>'accepted']);
        
        $project = new Project;
        $project->user_id = $user_request->user_id;
        $project->service_id = $user_request->service_id; 
        $project->company_name = $user_request->company_name;
        $project->no_of_employees = $user_request->no_of_employees;
        $project->project_title = $user_request->project_title;
        $project->business_type = $user_request->business_type;
        $project->url_link = $user_request->url_link;
        $project->special_note = $user_request->special_note;
        $project->status = 'Progress';
        $project->consultation_charges = $user_request->consultation_charges;
        $project->start_date = $user_request->start_date;
        $project->completion_date = $user_request->completion_date;
        $project->weeks = $user_request->weeks;
        $project->save();
        
        Transaction::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $stripe->id,
            'project_id' =>     $project->id,
            'amount'         => $stripe->amount,
            'payment_method'         => 'stripe',
            'status' => 1
        ]);

        return redirect()->back();

    }


}
