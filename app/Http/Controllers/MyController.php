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
use App\Models\Service;
use App\Models\UserEnroll;
use Carbon\Carbon;
use DB;
use App\Notifications\CourseNotification;
use App\Notifications\WebinarNotification;
use App\Notifications\BlogNotification;
use App\Notifications\MediaNotification;
use Notification;

class MyController extends Controller
{

    public function my_login()
    {
        if (Auth::check()) {
            // $users = User::count();
            // $course_enroll = UserEnroll::distinct()->count('course_id');
            // $payment = PaymentLog::sum('cost');
            // $payments_log = PaymentLog::with('user_enroll.user', 'user_enroll.course')->get();
            // $month =  PaymentLog::whereMonth('created_at', Carbon::now()->month)->first();
            // $month_sum =  PaymentLog::whereMonth('created_at', Carbon::now()->month)->sum('cost');
            // $data = [];
            // $data['label'][] = Carbon::parse($month->created_at)->format('M');
            // $data['data'][] = (int) $month_sum;
            // $data = [
            //     'users' => $users,
            //     'course_enroll' => $course_enroll,
            //     'payment' => $payment,
            //     'payments_log' => $payments_log,
            //     'chart_data' => json_encode($data)
            // ];

            return view('admin.dashboard');
        } else {

            return view('login');
        }
    }


   public function dashboard(){
       return view('admin.dashboard');
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

    public function projects()
    {
        return view('admin.projects');
    }

    public function payment_logs()
    {
        return view('admin.payment_logs');
    }

    public function consultation_requests()
    {
        return view('admin.consultation_requests');
    }

    public function feedbacks()
    {
        return view('admin.feedbacks');
    }

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
                    Mail::raw("Verification Code is " . $code . "And The Link Is " . $link, function ($message) use ($user_email, $code) {
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
        Category::where('id', $id)->delete();
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
        Service::where('id', $id)->delete();
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
