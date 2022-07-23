<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportTypeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\Api\NewPasswordController;
use App\Http\Controllers\profile\ProfileController;

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
    return view('auth/login');
});

Route::view('/login','auth.login')->name('login');

Route::get("/logout",[LogoutController::class,"logout"])->name("logout");

Auth::routes();

//superadmin homepage
Route::get('/superAdmin', [App\Http\Controllers\HomeController::class, 'superAdminHome'])->name('superAdmin.home')->middleware('is_admin');

//admin homepage
Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');

//chatroom route
Route::get('/chatroom_superAdmin', [App\Http\Controllers\ChatroomController::class, 'index_Superadmin']);
Route::get('/chatroom', [App\Http\Controllers\ChatroomController::class, 'index_admin']);
//CHATROOM ROUTE

//dashboard route
Route::get('/view', [App\Http\Controllers\DashboardController::class, 'viewRecord'])->name('view');

//adminlist route
Route::post('/add', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/edit/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
Route::get('/user/delete/{_id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
Route::get('/adminlist_superAdmin', [App\Http\Controllers\UserController::class, 'index_superAdmin'])->name('adminlist.super_admin');
Route::get('/admin', [App\Http\Controllers\UserController::class, 'index_admin']);
//END ADMINLIST ROUTE


//VB_userlist
Route::get('/VB_User_SuperAdmin', [App\Http\Controllers\VBUserController::class, 'index_superAdmin']);
Route::get('/VB_User_Admin', [App\Http\Controllers\VBUserController::class, 'index_admin']);
//Route::get('/VB_User_edit/{id}', [App\Http\Controllers\VBUserController::class, 'edit_form'])->name('edit.form');
//Route::post('/VB_User_editRole/{id}', [App\Http\Controllers\VBUserController::class, 'update_user'])->name('update.user');
//Route::post('/VB_User_editRole/{id}', [App\Http\Controllers\VBUserController::class, 'update_user_admin'])->name('update.user.admin');
Route::post('/VBUser_edit/{id}', [App\Http\Controllers\VBUserController::class, 'update'])->name('user.update');
Route::post('/VBUser_edit_admin/{id}', [App\Http\Controllers\VBUserController::class, 'update_user_admin'])->name('user.update.admin');
//END VBUSERLIST


//REPORT//
Route::get('/report_analytic',[ReportController::class,'report']);
Route::get('/user_report',[UserReportController::class,'index']);
Route::get('/report_analytic_admin',[ReportController::class,'report_admin']);
Route::get('/user_report_admin',[UserReportController::class,'index_admin']);
Route::post('/VB_User_ban',[App\Http\Controllers\UserReportController::class,'ban_user'])->name('ban.user');
Route::post('/VB_User_ban-admin',[App\Http\Controllers\UserReportController::class,'ban_user_admin'])->name('ban.user.admin');
Route::post('/VB_User_unban',[App\Http\Controllers\UserReportController::class,'unban_user'])->name('unban.user');
Route::post('/VB_User_unban-admin',[App\Http\Controllers\UserReportController::class,'unban_user_admin'])->name('unban.user.admin');
Route::get('report-detail/{email}',[App\Http\Controllers\UserReportController::class,'report_detail'])->name('report.detail');
Route::get('report-detail-admin/{email}',[App\Http\Controllers\UserReportController::class,'report_detail_admin'])->name('report.detail.admin');
//END REPORT//

Auth::routes();
//Route::post('update', 'App\Http\Controllers\UserController@updates')->name('user.update');
Auth::routes();

//update info
Route::get("/profile_superAdmin",[UserController::class,"profile_superAdmin"])->name("profile");
Route::get("/profile_admin",[UserController::class,"profile_admin"])->name("profile.admin");
Route::post('/updateProfile',[UserController::class,'updateInfo'])->name('superAdminProfile');
Route::post('/change-password',[UserController::class,'changePassword'])->name('superAdminChangePassword');
Route::post('/change-profile-picture',[UserController::class,'updatePicture'])->name('adminPictureUpdate');


//Print Page
Route::get('/superAdmin_printPreview','PrintController@printPreview');

//Reset Password
//Route::post('forgot-password',[NewPasswordController::class,'forgotPassword']);
Route::get('/password/forgot',[UserController::class,'showForgotForm'])->name('forgot.password.form');
Route::post('/password/forgot',[UserController::class,'sendResetLink'])->name('forgot.password.link');
Route::get('/password/reset/{token}',[UserController::class,'showResetForm'])->name('reset.password.form');
Route::post('/password/reset',[UserController::class,'resetPassword'])->name('reset.password');







