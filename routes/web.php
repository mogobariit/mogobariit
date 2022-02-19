<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClinteController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TopbarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('site.pages.home');
});
// fontend route
Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/domain',[HomeController::class,'domain'])->name('domain-register');
Route::get('/vpshosting',[HomeController::class,'vpshosting'])->name('vpshosting');
Route::get('/shearheosting',[HomeController::class,'shearheosting'])->name('shearheosting');
Route::get('/contact',[HomeController::class,'contactpage'])->name('contactpage');
Auth::routes();
// admin

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-home');
Route::resource('/categories', CategoryController::class);
Route::resource('/logo', LogoController::class);
Route::resource('/slider', SliderController::class);
Route::resource('/topbar', TopbarController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/course', CourseController::class);
Route::resource('/partner', PartnerController::class);