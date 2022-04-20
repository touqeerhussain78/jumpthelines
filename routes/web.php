<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
    return view('welcome');
});


// Auth::routes();
Auth::routes([
    'register' => false,
    'login' => true,
]);


Route::get('/', [App\Http\Controllers\MyController::class, 'my_login'])->name('my_login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'create'])->name('create');
Route::get('/password_recovery', [App\Http\Controllers\MyController::class, 'password_recovery'])->name('password_recovery');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'my_login'])->name('login');



Route::group(['middleware' => 'auth'],function () { 



Route::get('/dashboard', [App\Http\Controllers\MyController::class, 'dashboard'])->name('dashboard');
// Services
// Route::get('/services', [App\Http\Controllers\MyController::class, 'services'])->name('services');
// Route::get('/service/add', [App\Http\Controllers\MyController::class, 'service_add'])->name('service_add');
// Route::post('/service/store', [App\Http\Controllers\MyController::class, 'service_store'])->name('service_store');
// Route::get('/services/edit', [App\Http\Controllers\MyController::class, 'service_edit'])->name('service_edit');
// Route::post('/service/update/{id}', [App\Http\Controllers\MyController::class, 'service_update'])->name('service_update');
// Route::get('/service/delete/{id}', [App\Http\Controllers\MyController::class, 'service_delete'])->name('service_delete');

Route::get('/users', [App\Http\Controllers\MyController::class, 'users'])->name('users');
Route::get('/projects', [App\Http\Controllers\MyController::class, 'projects'])->name('projects');
Route::get('/payment_logs', [App\Http\Controllers\MyController::class, 'payment_logs'])->name('payment_logs');
Route::get('/consultation_requests', [App\Http\Controllers\MyController::class, 'consultation_requests'])->name('consultation_requests');
Route::get('/feedbacks', [App\Http\Controllers\MyController::class, 'feedbacks'])->name('feedbacks');

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



    // Users
    Route::get('/users', [App\Http\Controllers\MyController::class, 'users'])->name('users');
    Route::post('/user_status/{id}', [App\Http\Controllers\MyController::class, 'user_status'])->name('user_status');
    Route::post('/user_filter', [App\Http\Controllers\MyController::class, 'user_filter'])->name('user_filter');



});



Route::get('/verification_code/{email}', [App\Http\Controllers\MyController::class, 'verification_code'])->name('verification_code');

Route::post('/verifying_password', [App\Http\Controllers\MyController::class, 'verifying_password'])->name('verifying_password');
Route::post('/forget_password', [App\Http\Controllers\MyController::class, 'forget_password'])->name('forget_password');
Route::get('/update_password/{email}', [App\Http\Controllers\MyController::class, 'update_password'])->name('update_password');
Route::post('/updating_password', [App\Http\Controllers\MyController::class, 'updating_password'])->name('updating_password');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
