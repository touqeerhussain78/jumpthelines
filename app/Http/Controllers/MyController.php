<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use PHPUnit\Framework\Constraint\Count;
use Session;
use App\Models\Courses;
use App\Models\CourseObjective;
use App\Models\PaymentLog;
use App\Models\Webinar;
use App\Models\Announcment;
use App\Models\UserAnnouncment;
use App\Models\CourseMedia;
use App\Models\Blog;
use App\Models\EnrollmentQuestion;
use App\Models\Feedback;
use App\Models\HandOnExperience;
use App\Models\Category;
use App\Models\Project;
use App\Models\Report;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\UserEnroll;
use App\Models\UserService;
use Carbon\Carbon;
use DB;
use App\Notifications\CourseNotification;
use App\Notifications\WebinarNotification;
use App\Notifications\BlogNotification;
use App\Notifications\MediaNotification;
use Illuminate\Support\Facades\Response;
use Notification;

class MyController extends Controller
{

    public function my_login()
    {
        if (Auth::check()) {
            $users = User::count();
            $project_count = Project::count();
            $projects =  Project::with('user', 'service')->get();
            $payment = Transaction::sum('amount');

            // Chart 
            $month =  Transaction::whereMonth('created_at', Carbon::now()->month)->first();
            $month_sum =  Transaction::whereMonth('created_at', Carbon::now()->month)->sum('amount');
            $data = [];
            $data['label'][] = Carbon::parse($month->created_at)->format('M');
            $data['data'][] = (int) $month_sum;
            

            $data = [
                'users' => $users,
                'project_count' => $project_count,
                'payment' => $payment,
                'projects' => $projects,
                'chart_data' => json_encode($data)
            ];

            return view('admin.dashboard')->with('data',$data);
        } else {

            return view('login');
        }
    }


   public function dashboard(){

        $users = User::count();
        $project_count = Project::count();
        $projects =  Project::with('user', 'service')->get();
        $payment = Transaction::sum('amount');

        // Chart 
        $month =  Transaction::whereMonth('created_at', Carbon::now()->month)->first();
        $month_sum =  Transaction::whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $data = [];
        $data['label'][] = Carbon::parse($month->created_at)->format('M');
        $data['data'][] = (int) $month_sum;
        $data = [
            'users' => $users,
            'project_count' => $project_count,
            'payment' => $payment,
            'projects' => $projects,
            'chart_data' => json_encode($data)
        ];
       return view('admin.dashboard')->with('data', $data);
   }

    public function getYearlyBased($year_get)
    {


        // return $request->year;



        if (isset($year_get)) {
            
            $year =  Transaction::whereYear('created_at', $year_get)->first();
            $year_sum =  Transaction::whereYear('created_at', $year_get)->sum('amount');

            // return response()->json($year_sum);
            if (isset($year)) {
                $data = [];
                $data['label'][] = Carbon::parse($year->created_at)->format('Y');
                $data['data'][] = (int) $year_sum;
                return response()->json(['success' => 1, 'chart_data' => $data]);
            } else {
                $data = [];
                $data['label'][] = Carbon::parse($year)->format('Y');
                $data['data'][] = (int) 0;

                return response()->json(['success' => 1, 'chart_data' => $data]);
            }
        } else {
            return response()->json(['success' => 0, 'chart_data' => 'no data found']);
        }
    }

    
    // public function service_store()
    // {
    //     return view('admin.service');
    // }

    // public function service_edit()
    // {
    //     return view('admin.service');
    // }

    // public function service_update()
    // {
    //     return view('admin.service');
    // }

    // public function service_delete()
    // {
    //     return view('admin.service');
    // }




    // public function users()
    // {
    //     return view('admin.users');
    // }

    
    public function service()
    {
        return view('admin.service');
    }

    // public function categories()
    // {
    //     return view('admin.categories');
    // }

    public function verification_code($asd)
    {

        return view('admin.verification_code');
    }


    public function verifying_password(Request $request)
    {
        $code  = $request->code;
        $email  = $request->email;
        $user_check = User::where('code', $code)->where('email', $email)->first();
        if (isset($user_check)) {
            return redirect()->route('update_password', ['email' => $email]);
        } else {
            return 'wrong code';
        }
    }

    public function update_password($email)
    {

        $my_email = $email;

        return view('admin.update_password');
    }


    public function updating_password(Request $request)
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
            return view('login');
        }
    }

    public function forget_password(Request $request)
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
                return redirect()->route('verification_code', ['email' => $email]);
            }
        } else {
            return "no user found";
        }
    }

    public function password_recovery()
    {
        return view('admin.password-recovery');
    }

    public function categories()
    {
        $category  = Category::get();
        return view('admin.categories', compact('category', $category));
    }

    public function categories_add(Request $request)
    {
        // return $request->all();
        // $request->validate([
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $category         = new Category;
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories');
    }

    public function categories_update(Request $request,$id) {

        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories');
    }

    public function categories_delete($id)
    {
        $is_exist_service = Service::where('category_id', $id)->first();
        if ($is_exist_service->count() > 0 ) {
            return redirect()->route('categories')->with('success', 'Cant Delete this');
        } else {
            Category::where('id', $id)->delete();
        }
        return redirect()->route('categories');
    }

    public function categories_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $category_filter = Category::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.categories', compact('category_filter', $category_filter));
    }


    public function services()
    {
        $service  = Service::with('category')->get();
        return view('admin.services', compact('service', $service));
    }

    public function services_add()
    {
        $category  = Category::get();
        return view('admin.service_add')->with('category',$category);
    }


    public function service_store(Request $request)
    {
        $service         = new Service;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = base_path('public/services');
            $image->move($destinationPath, $image_name);
            $service->image      = $image_name;
        }
        $service->title = $request->title;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->estimate_time = $request->estimate_time;
        $service->save();
        return redirect()->route('services');
    }


    public function service_edit($id){
        
        $category = Category::get();
        $service =  Service::with('category')->where('id', $id)->first();
        return view('admin.service_edit', compact('service', $service, 'category', $category));
    }

    public function service_update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service_id = $request->id;
        $service =  Service::where('id', $service_id)->first();
        if ($service->count() > 0) {

            $service->title = $request->title;
            $service->description  = $request->description;
            $service->category_id = $request->category_id;
            $service->estimate_time = $request->estimate_time;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                //  print_r($image);
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                //  echo $image;
                //  exit(0);
                $destinationPath = base_path('public/services');
                $image->move($destinationPath, $image_name);
                $service->image      = $image_name;
            }
            $service->save();
        }
        return redirect()->route('services');
    }

    public function service_delete($id)
    {

        $is_exist_service = UserService::where('service_id',$id)->first();
        $is_exist_project = Project::where('service_id', $id)->first();
        if($is_exist_project->count()>0 OR $is_exist_service->count() > 0 ){
            return redirect()->route('services')->with('success','Cant Delete this');
        }else{
            Service::where('id', $id)->delete();
        }
        return redirect()->route('services');
    }

    public function services_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $service_filter = Service::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.services', compact('service_filter', $service_filter));
    }

    public function users() {

        $users = User::get();
        return view('admin.users',compact('users',$users));
    }

    public function user_status(Request $request,$id)
    {
        $status = $request->status;
        if($status == '1')
        {
            $status = 0;
        }else{
            $status = 1;
        }
        $user = User::where('id', $id)->first();
        $user->status = $status;
        $user->save(); 
        return redirect()->route('users');
    }

    public function user_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $user_filter = User::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.users', compact('user_filter', $user_filter));
    }


    public function profile (){
        
        return view('admin.profile');
    }

    public function edit_profile(){

        return view('admin.edit_profile');
    }

    public function profile_update(Request $request){

        
        $user = User::where('id', Auth::user()->id)->first();
        $password = $request->new_password;
        if(isset($password))
        {
            $current_password  = $request->current_password;
            // $this->validate($request, [
            //     'password' => 'required|confirmed|min:6',
            // ]);
            
            if (Hash::check($current_password, Auth::user()->password)) {
                $user->password = Hash::make($request->new_password);
            }else{
                return redirect()->back()->with('success', "Some Error");
            }
        }

        if(isset($request->name)) {
            $user->name = $request->name;
        }
        if (isset($request->name)) {
            $user->mobile_no = $request->mobile_no;
        }
        $user->save();
        return redirect()->back()->with('success', "Profile Update");
    }


    

    public function user_status_change(Request $request){

        UserService::where('id',$request->id)->update(['status'=>$request->status]);
        return response()->json('working');

    }

    public function consultation_requests()
    {
        $user_service = UserService::with('user', 'service')->get();
        $consultation_request = UserService::count();
        $data = [
            'consultation_request' => $consultation_request
        ];
        return view('admin.consultation_requests', compact('user_service'))->with('data',$data);
    }

    public function user_service_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $consultation_request = UserService::count();
        $data = [
            'consultation_request' => $consultation_request
        ];
        $user_service_filter = UserService::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.projects', compact('user_service_filter', $user_service_filter))->with('data', $data);
    }

    public function accept_quote(Request $request){
        // return $request->completion_date;
        UserService::where('id', $request->user_service_id)
        ->update(['status' => $request->status, 'consultation_charges' => $request->consultation_charges, 'completion_date' => $request->completion_date
        ,'start_date' => $request->start_date, 
        'weeks' => $request->weeks]);

        // $user_request = UserService::where('id',$request->user_service_id)->first();
        
        // $project = new Project;
        // $project->user_id = $user_request->user_id;
        // $project->service_id = $user_request->service_id; 
        // $project->company_name = $user_request->company_name;
        // $project->no_of_employees = $user_request->no_of_employees;
        // $project->project_title = $user_request->project_title;
        // $project->business_type = $user_request->business_type;
        // $project->url_link = $user_request->url_link;
        // $project->special_note = $user_request->special_note;
        // $project->status = 'In Progress';
        // $project->consultation_charges = $user_request->consultation_charges;
        // $project->completion_date = $user_request->completion_date;
        // $project->save();

        return redirect()->back();
    }

    public function consultation_detail($id){
        
        $consultation_detail = UserService::with('user', 'service')->where('id',$id)->first();
        return view('admin.consultation_detail', compact('consultation_detail', $consultation_detail));
    }

    public function consultation_detail_pending($id)
    {

        $consultation_detail = UserService::with('user', 'service')->where('id', $id)->first();
        return view('admin.consultation_detail_pending', compact('consultation_detail', $consultation_detail));
    }

    public function projects (){
        
        $project_count =  Project::count();
        $project_progress_count =  Project::where('status','progress')->count();
        $total_amount = Transaction::sum('amount');
        $data=[
            'project_count' => $project_count,
            'project_progress_count' => $project_progress_count,
            'total_amount' => $total_amount,
        ];

        $projects =  Project::with('user', 'service')->get();
        return view('admin.projects', compact('projects', $projects))->with('data',$data);
    }

    public function project_filter(Request $request)
    {

        $project_count =  Project::count();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $project_progress_count =  Project::where('status', 'progress')->count();
        $total_amount = Transaction::sum('amount');
        $data = [
            'project_count' => $project_count,
            'project_progress_count' => $project_progress_count,
            'total_amount' => $total_amount,
        ];

        $project_filter =  Project::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)
        ->with('user', 'service')->get();
        return view('admin.projects', compact('project_filter', $project_filter))->with('data', $data);
        
        // $user_filter = User::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        // return view('admin.users', compact('user_filter', $user_filter));
    }

    public function project_detail_process($id){

        $transactions = Transaction::where('project_id',$id)->get();
        $reports = Report::where('project_id',$id)->get();
        $project =  Project::with('user', 'service')->where('id',$id)->first();
        return view('admin.project_detail_process', compact('project', $project, 'reports',$reports, 'transactions', $transactions));
    }

    public function project_detail_complete($id)
    {
        
        $transactions = Transaction::where('project_id', $id)->get();
        $reports = Report::where('project_id', $id)->get();
        $project =  Project::with('user', 'service')->where('id', $id)->first();
        return view('admin.project_detail_complete', compact('project', $project,'reports',$reports, 'transactions', $transactions ));
    }

    public function project_status_change(Request $request)
    {
        Project::where('id', $request->id)->update(['status' => $request->status]);
        return response()->json('working');
    }

    public function report_add(Request $request){
        // return $request->all();
        $report = new Report;
        $report->title = $request->title;
        $report->project_id = $request->project_id;
        if ($request->hasFile('report')) {
            $image = $request->file('report');
            //  print_r($image);
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            //  echo $image;
            //  exit(0);
            $destinationPath = base_path('public/reports');
            $image->move($destinationPath, $image_name);
            $report->report      = $image_name;
        }
        $report->save();
        return redirect()->back();

    }

    public function report_delete(Request $request) {
        Report::where('id', $request->id)->delete();
        return response()->json('delete');
    }

    public function report_download($id)
    {

        $report = Report::where('id', $id)->first();
        $filepath = public_path('reports/') . $report->report;
        return response()->download($filepath);
    }
    
    public function feedbacks(){
        
        $feedbacks = Feedback::get();
        return view('admin.feedbacks', compact('feedbacks', $feedbacks));
    }

    public function feedback_delete($id)
    {
        Feedback::where('id', $id)->delete();
        return redirect()->route('feedbacks');
    }

    public function feedback_detail($id)
    {
        $feedback_detail =  Feedback::where('id', $id)->first();
        return view('admin.feedback_detail', compact('feedback_detail', $feedback_detail));
    }

    public function feedback_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $feedback_filter = Feedback::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.feedbacks', compact('feedback_filter', $feedback_filter));
    }

    public function payment_logs()
    {
        $payments = Transaction::with('user','project')->get();
        $project_count = Project::count();
        $total_sum = Transaction::sum('amount');
        $project_count_complete = Project::where('status','completed')->count();
        $data=array(
            'payments' => $payments,
            'project_count' => $project_count,
            'project_count_complete' => $project_count_complete,
            'total_sum'         => $total_sum
        );
        return view('admin.payment_logs')->with('data',$data);
    }

    public function payment_filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $payment_filter = Transaction::with('user', 'project')->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        $project_count = Project::count();
        $total_sum = Transaction::sum('amount');
        $project_count_complete = Project::where('status', 'completed')->count();
        $data = array(
            'project_count' => $project_count,
            'project_count_complete' => $project_count_complete,
            'total_sum'         => $total_sum,
            'payment_filter' => $payment_filter
        );
        $payment_filter = Transaction::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        return view('admin.payment_logs')->with('data',$data);
    }

    
    

    // public function consultation_requests()
    // {
    //     return view('admin.consultation_requests');
    // }


    // public function blog_add()
    // {
    //     return view('admin.blog_add');
    // }

    // public function blog_filter(Request $request)
    // {


    //     $start_date = $request->start_date;
    //     $end_date = $request->end_date;
    //     $blog_filter = Blog::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
    //     return view('admin.blogs', compact('blog_filter', $blog_filter));
    // }



    // public function blog_detail($id)
    // {

    //     $blog_record = Blog::where('id', $id)->first();
    //     // $payment_log= PaymentLog::with('user_enroll.course.payment')->where('id', $id)->get();
    //     return view('admin.blog_details', compact('blog_record', $blog_record));
    // }



    // public function blog_save(Request $request)
    // {
    //     // return $request->all();
    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $blog         = new Blog;
    //     $blog->title = $request->title;
    //     $blog->description = $request->description;
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         //  print_r($image);
    //         $image_name = time() . '.' . $image->getClientOriginalExtension();
    //         //  echo $image;
    //         //  exit(0);
    //         $destinationPath = base_path('public/blog');
    //         $image->move($destinationPath, $image_name);

    //         // $imageName      = time() . '.' . $request->image;
    //         // $request->image->move(public_path('images'), $imageName);
    //         $blog->image      = $image_name;
    //     }
    //     $blog->save();


    //     $id = Auth::user()->id;
    //     $user = User::where('id', $id)->first();
    //     $user->notify(new BlogNotification($blog));

    //     Session::flash('message', 'Blog Add Successfully!');
    //     Session::flash('alert-class', 'alert-info');
    //     return redirect()->route('blogs');
    // }

    // public function blog_edit($id)
    // {


    //     $blog_record = Blog::where('id', $id)->first();
    //     return view('admin.blog_edit', compact('blog_record'));
    // }

    // public function blog_edit_update(Request $request)
    // {

    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);



    //     $blog_id = $request->id;
    //     $blog =  Blog::where('id', $blog_id)->first();
    //     if ($blog->count() > 0) {

    //         $blog->title = $request->title;
    //         $blog->description  = $request->description;
    //         if ($request->hasFile('image')) {
    //             $image = $request->file('image');
    //             //  print_r($image);
    //             $image_name = time() . '.' . $image->getClientOriginalExtension();
    //             //  echo $image;
    //             //  exit(0);
    //             $destinationPath = base_path('public/blog');
    //             $image->move($destinationPath, $image_name);

    //             // $imageName      = time() . '.' . $request->image;
    //             // $request->image->move(public_path('images'), $imageName);
    //             $blog->image      = $image_name;
    //         }
    //         $blog->save();

    //         Session::flash('message', 'Blog Update Successfully!');
    //         Session::flash('alert-class', 'alert-info');
    //         return redirect()->back();
    //     }
    // }
}
