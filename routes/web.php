<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Frontend;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Routes
Route::get('/dashboard',[Admin::class,"dashboard"])->middleware("auth");
Route::get('/add-service',[Admin::class,"add_service"])->middleware("auth");
Route::post('/ins-service',[Admin::class,"ins_service"])->middleware("auth");
Route::get('/list-service',[Admin::class,"listservices"])->middleware("auth");
Route::post('/update_service/{id}',[Admin::class,"update_service"])->middleware("auth");
Route::get('/delete_service/{service_id}', [Admin::class,"delete_service"])->middleware("auth");
Route::get('/booking_list',[Admin::class,"booking_list"]);
Route::get('/booking_list_pdf',[Admin::class,"booking_list_pdf"]);
Route::get('/login',[Admin::class,"login"]);
Route::post('/login-check',[Admin::class,"login_check"]);
Route::get('/logout',[Admin::class,"logout"]);
Route::get('/edit/{id}',[Admin::class,"edit"]);

// Frontend Routes
Route::get('/premium_service',[Frontend::class,"premium_service"]);
Route::get('/nonpremium_service',[Frontend::class,"NonPremium_service"]);
Route::get('/',[Frontend::class,"home"]);
Route::get('/terms_and_conditions',[Frontend::class,"terms_and_conditions"]);
Route::get('/about_us',[Frontend::class,"about_us"]);
Route::get('/contact_us',[Frontend::class,"contact_us"]);

Route::get('/pre_booking',[Frontend::class,"pre_booking"]);
Route::get('/showpre_booking',[Frontend::class,"showpre_booking"]);

Route::get('/privacy_policy',[Frontend::class,"privacy_policy"]);
Route::post('/booking/{pno}/{sid}',[Frontend::class,"booking"]);
Route::get('/carbooking/{sid}',[Frontend::class,"carbooking"]);
Route::get('/payment/{phone_no}/{sid}', [Frontend::class, 'payment']);