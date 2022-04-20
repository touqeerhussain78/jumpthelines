<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});


// Auth::routes();
Auth::routes([
    'register' => false,
    'login' => true,
]);

Route::get('/reset_password', [App\Http\Controllers\UserController::class, 'reset_password'])->name('reset_password');
Route::get('admin/login', [App\Http\Controllers\MyController::class, 'my_login'])->name('my_login');

Route::get('/password_recovery', [App\Http\Controllers\MyController::class, 'password_recovery'])->name('password_recovery');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'my_login'])->name('login');

 

Route::group(['middleware' => ['auth','admin']],function () { 
    
    
    
    Route::get('/dashboard', [App\Http\Controllers\MyController::class, 'dashboard'])->name('dashboard');
    Route::get('/get-chart/{year}', [App\Http\Controllers\MyController::class, 'getYearlyBased'])->name('get-chart');
// Services
// Route::get('/services', [App\Http\Controllers\MyController::class, 'services'])->name('services');
// Route::get('/service/add', [App\Http\Controllers\MyController::class, 'service_add'])->name('service_add');
// Route::post('/service/store', [App\Http\Controllers\MyController::class, 'service_store'])->name('service_store');
// Route::get('/services/edit', [App\Http\Controllers\MyController::class, 'service_edit'])->name('service_edit');
// Route::post('/service/update/{id}', [App\Http\Controllers\MyController::class, 'service_update'])->name('service_update');
// Route::get('/service/delete/{id}', [App\Http\Controllers\MyController::class, 'service_delete'])->name('service_delete');

Route::get('/users', [App\Http\Controllers\MyController::class, 'users'])->name('users');


// Route::get('/consultation_requests', [App\Http\Controllers\MyController::class, 'consultation_requests'])->name('consultation_requests');
// Route::get('/feedbacks', [App\Http\Controllers\MyController::class, 'feedbacks'])->name('feedbacks');

// Route::get('/categories', [App\Http\Controllers\MyController::class, 'categories'])->name('categories');


// Categories
Route::get('/categories', [App\Http\Controllers\MyController::class, 'categories'])->name('categories');
Route::post('/categories_add', [App\Http\Controllers\MyController::class, 'categories_add'])->name('categories_add');
Route::post('/categories_save', [App\Http\Controllers\MyController::class, 'categories_save'])->name('categories_save');
Route::post('/categories_update/{id}', [App\Http\Controllers\MyController::class, 'categories_update'])->name('categories_update');
Route::post('/categories_delete/{id}', [App\Http\Controllers\MyController::class, 'categories_delete'])->name('categories_delete');
Route::post('/categories_filter', [App\Http\Controllers\MyController::class, 'categories_filter'])->name('categories_filter');



// Services
Route::get('/service', [App\Http\Controllers\MyController::class, 'services'])->name('services');
Route::get('/services_add', [App\Http\Controllers\MyController::class, 'services_add'])->name('services_add');
Route::post('/service_store', [App\Http\Controllers\MyController::class, 'service_store'])->name('service_store');
Route::get('/service_edit/{id}', [App\Http\Controllers\MyController::class, 'service_edit'])->name('service_edit');
Route::post('/service_update/{id}', [App\Http\Controllers\MyController::class, 'service_update'])->name('service_update');
Route::post('/service_delete/{id}', [App\Http\Controllers\MyController::class, 'service_delete'])->name('service_delete');
Route::post('/services_filter', [App\Http\Controllers\MyController::class, 'services_filter'])->name('services_filter');

    //Profile 
    Route::get('/profile', [App\Http\Controllers\MyController::class, 'profile'])->name('profile');
    Route::get('/edit_profile', [App\Http\Controllers\MyController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/profile_update', [App\Http\Controllers\MyController::class, 'profile_update'])->name('profile_update');
    
    // Users
    Route::get('/users', [App\Http\Controllers\MyController::class, 'users'])->name('users');
    Route::post('/user_status/{id}', [App\Http\Controllers\MyController::class, 'user_status'])->name('user_status');
    Route::post('/user_filter', [App\Http\Controllers\MyController::class, 'user_filter'])->name('user_filter');

    Route::post('/user_status_change', [App\Http\Controllers\MyController::class, 'user_status_change'])->name('user_status_change');
    Route::post('/user_service_filter', [App\Http\Controllers\MyController::class, 'user_service_filter'])->name('user_service_filter');

    Route::get('/consultation_requests', [App\Http\Controllers\MyController::class, 'consultation_requests'])->name('consultation_requests');
    Route::post('/accept_quote', [App\Http\Controllers\MyController::class, 'accept_quote'])->name('accept_quote');
    Route::get('/consultation_detail/{id}', [App\Http\Controllers\MyController::class, 'consultation_detail'])->name('consultation_detail');
    Route::get('/consultation_detail_pending/{id}', [App\Http\Controllers\MyController::class, 'consultation_detail_pending'])->name('consultation_detail_pending');

    Route::get('/projects', [App\Http\Controllers\MyController::class, 'projects'])->name('projects');
    Route::post('/project_filter', [App\Http\Controllers\MyController::class, 'project_filter'])->name('project_filter');
    // Route::get('/project_detail/{id}', [App\Http\Controllers\MyController::class, 'project_detail'])->name('project_detail');
    Route::get('/project_detail_process/{id}', [App\Http\Controllers\MyController::class, 'project_detail_process'])->name('project_detail_process');
    Route::get('/project_detail_complete/{id}', [App\Http\Controllers\MyController::class, 'project_detail_complete'])->name('project_detail_complete');
    Route::post('/project_status_change', [App\Http\Controllers\MyController::class, 'project_status_change'])->name('project_status_change');

    Route::post('/report_add', [App\Http\Controllers\MyController::class, 'report_add'])->name('report_add');
    Route::post('/report_delete', [App\Http\Controllers\MyController::class, 'report_delete'])->name('report_delete');
    Route::get('/report_download/{id}', [App\Http\Controllers\MyController::class, 'report_download'])->name('report_download');
    
    // Route::get('/consultation_requests_detail/{id}', [App\Http\Controllers\MyController::class, 'consultation_requests_detail'])->name('consultation_requests_detail');

    Route::get('/feedbacks', [App\Http\Controllers\MyController::class, 'feedbacks'])->name('feedbacks');
    Route::post('/feedback_delete/{id}', [App\Http\Controllers\MyController::class, 'feedback_delete'])->name('feedback_delete');
    Route::get('/feedback_detail/{id}', [App\Http\Controllers\MyController::class, 'feedback_detail'])->name('feedback_detail');
    Route::post('/feedback_filter', [App\Http\Controllers\MyController::class, 'feedback_filter'])->name('feedback_filter');

    Route::get('/payment_logs', [App\Http\Controllers\MyController::class, 'payment_logs'])->name('payment_logs');
    Route::post('/payment_filter', [App\Http\Controllers\MyController::class, 'payment_filter'])->name('payment_filter');
    
});



Route::get('/verification_code/{email}', [App\Http\Controllers\MyController::class, 'verification_code'])->name('verification_code');

Route::post('/verifying_password', [App\Http\Controllers\MyController::class, 'verifying_password'])->name('verifying_password');
Route::post('/forget_password', [App\Http\Controllers\MyController::class, 'forget_password'])->name('forget_password');
Route::get('/update_password/{email}', [App\Http\Controllers\MyController::class, 'update_password'])->name('update_password');
Route::post('/updating_password', [App\Http\Controllers\MyController::class, 'updating_password'])->name('updating_password');




Route::group(['middleware' => ['auth', 'user']],function () { 

});


Route::get('/home', [App\Http\Controllers\UserController::class, 'home'])->name('home');
Route::get('/about_us', [App\Http\Controllers\UserController::class, 'about_us'])->name('about_us');

Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::get('/service_category', [App\Http\Controllers\UserController::class, 'service_category'])->name('service_category');
Route::get('/service_detail/{id}', [App\Http\Controllers\UserController::class, 'service_detail'])->name('service_detail');
Route::get('/enquiry_detail/{id}', [App\Http\Controllers\UserController::class, 'enquiry_detail'])->name('enquiry_detail');
Route::post('/book_service', [App\Http\Controllers\UserController::class, 'book_service'])->name('book_service');
Route::get('/enquiry_form_log', [App\Http\Controllers\UserController::class, 'enquiry_form_log'])->name('enquiry_form_log');
Route::get('/enquiry_form_submitted/{id}', [App\Http\Controllers\UserController::class, 'enquiry_form_submitted'])->name('enquiry_form_submitted');
Route::get('/service_listing', [App\Http\Controllers\UserController::class, 'service_listing'])->name('service_listing');
Route::post('/enquiry_log_filter', [App\Http\Controllers\UserController::class, 'enquiry_log_filter'])->name('enquiry_log_filter');
Route::post('/user_forget_password', [App\Http\Controllers\UserController::class, 'user_forget_password'])->name('user_forget_password');
Route::get('/user_password_recovery', [App\Http\Controllers\UserController::class, 'user_password_recovery'])->name('user_password_recovery');
Route::post('/user_verifying_password', [App\Http\Controllers\UserController::class, 'user_verifying_password'])->name('user_verifying_password');
Route::get('/user_update_password/{email}', [App\Http\Controllers\UserController::class, 'user_update_password'])->name('user_update_password');
Route::post('/user_update_password_save', [App\Http\Controllers\UserController::class, 'user_update_password_save'])->name('user_update_password_save');
Route::post('/pay', [App\Http\Controllers\UserController::class, 'pay'])->name('pay');


Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'create'])->name('create');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
