<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\pagecontroller;

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
Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/' , [AdminController::class,'index'])->name('admin.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('courses', CourseController::class);
    Route::get('all-registration',[CourseController::class,'registrations'])->name('registrations');
    Route::delete('all-registration/{id}',[CourseController::class,'registrationsDelete'])->name('registrations.destroy');

    });

Route::get('/',[pagecontroller::class,'home'])->name('homepage');
Route::get('coursel/{slug}',[pagecontroller::class,'course'])->name('course');
Route::post('/search',[pagecontroller::class,'search'])->name('search');

Route::get('register/{slug}',[pagecontroller::class,'register'])->name('register');
Route::post('register/{slug}',[pagecontroller::class,'registersubmit']);


Route::get('pay/{id}',[pagecontroller::class,'pay'])->name('pay');
Route::get('thankes/{id}',[pagecontroller::class,'thankes'])->name('thankes');






Auth::routes(['register'=> false]);

 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
