<?php

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
    return view('userview');
});

Route::get('/role', function () {
    return view('admin.roles_permission');
});

Auth::routes();

Route::get('/Branch_Admin', 'HomeController@index')->name('Branch_Admin');


Route::get('/Co_ordinate', 'Coordinate1Controller@index')->middleware('Co_ordinate');
 
// Route::get('/Branch_Admin', function(){
//     echo "Hello Branch_Admin";
// })->middleware('Branch_Admin');
 
Route::get('/Doctor', function(){
    return view('home');
})->middleware('Doctor');

Route::get('/Patient', function(){
    echo "Hello Patient";
})->middleware('Patient');


//All Admin Role
//Admin Login
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/appointment1', 'AdminController@appointments');

//addcoordinate
Route::resource('coordinate2', 'Coordinate2Controller');
Route::get('addcoordinate','Coordinate2Controller@create');
Route::post('addcoordinate','Coordinate2Controller@store')->name('addcoordinate');
Route::get('/assign_country','Coordinate2Controller@Display');


//adddepartment
Route::resource('department', 'DepartmentController');
Route::get('adddepartment','DepartmentController@create');
Route::post('adddepartment','DepartmentController@store')->name('adddepartment');

//adddoctor
Route::resource('doctor', 'DoctorController');
Route::get('adddoctor','DoctorController@create');
Route::post('adddoctor','DoctorController@store')->name('adddoctor');

//addcountry
Route::resource('country', 'CountryController');
Route::get('addcountry','CountryController@create');
Route::post('addcountry','CountryController@store')->name('addcountry');

//add_schedule
Route::resource('schedule', 'ScheduleController');
Route::get('addschedule','ScheduleController@create');
Route::post('addschedule','ScheduleController@store')->name('addschedule');



//addbranchadmin
Route::resource('branchadmin', 'BranchAdminController');
Route::get('addbranchadmin','BranchAdminController@create');
Route::post('addbranchadmin','BranchAdminController@store')->name('addbranchadmin');
Route::get('assignbranch','BranchAdminController@display');


//addbranch
Route::resource('branch', 'BranchController');
Route::get('addbranch','BranchController@create');
Route::post('addbranch','BranchController@store')->name('addbranch');

//Send Email
Route::get('/email', 'SendEmailController@inbox');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');



Route::get('/patientinfo', 'PatientsController@index');
Route::get('add_patient','PatientsController@create');
Route::post('add_patient','PatientsController@store')->name('add_patient');

Route::get('/appointment', 'AppointmentController@index');
Route::get('add_appointment','AppointmentController@create');
Route::post('add_appointment','AppointmentController@store')->name('add_appointment');
Route::get('Doctor_schedule', 'AppointmentController@schedule');

Route::get('/avldoctor', 'AppointmentController@Display');
Route::get('/action', 'AppointmentController@action')->name('live_search.action');

//Feedback
Route::get('/feedback', 'FeedbackController@index');
Route::get('add_feedback','FeedbackController@create');
Route::post('add_feedback','FeedbackController@store')->name('add_feedback');
Route::get('/feedbacklist', 'FeedBackControllerlist@display');