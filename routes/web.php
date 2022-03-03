<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/howitworks',[App\Http\Controllers\FrontEndController::class,'howitworks']);
Route::get('/teacher',[App\Http\Controllers\FrontEndController::class,'teacher']);
Route::get('/schoolbus',[App\Http\Controllers\FrontEndController::class,'schoolbus']);
Route::get('/schoolbus/{school}/show',[App\Http\Controllers\FrontEndController::class,'showschoolbus']);
Route::get('/store',[App\Http\Controllers\FrontEndController::class,'materialstore']);
Route::get('/getschool/{province}',[App\Http\Controllers\FrontEndController::class,'getSchool']);
Route::get('/material-grade',[App\Http\Controllers\FrontEndController::class,'materialgrade']);


Route::group(['middleware'=>['auth','admin']], function(){


    
    Route::resource('notifications', 'App\Http\Controllers\NotificationsController');
    Route::resource('profile', 'App\Http\Controllers\ProfileController');
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::resource('grade', 'App\Http\Controllers\GradeController');
    Route::resource('learn', 'App\Http\Controllers\LearnController');
    Route::resource('material', 'App\Http\Controllers\MaterialController');
    Route::resource('provider', 'App\Http\Controllers\ProviderController');
    Route::resource('province', 'App\Http\Controllers\ProvinceController');
    Route::resource('school', 'App\Http\Controllers\SchoolController');
    Route::resource('sell', 'App\Http\Controllers\SellController');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('materialescolar', 'App\Http\Controllers\MaterialEscolarController');
    Route::resource('schoolbus', 'App\Http\Controllers\SchoolBusController');
    Route::resource('teacher', 'App\Http\Controllers\TeacherController');

    Route::get('/add/{school}/material',[App\Http\Controllers\MaterialEscolarController::class,'addmaterial']);
    Route::post('/changepassword',[\App\Http\Controllers\ProfilesController::class,'changepassword']);



   

    
});

Route::group(['middleware'=>['auth','user']], function(){

    Route::get('/teacher',[App\Http\Controllers\FrontEndController::class,'teacher']);
    Route::get('/schoolbus',[App\Http\Controllers\FrontEndController::class,'schoolbus']);
    Route::get('/schoolbus/{school}/show',[App\Http\Controllers\FrontEndController::class,'showschoolbus']);    

});