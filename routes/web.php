<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SentecController;
//use App\Http\Controllers\TenantController;



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
Route::get('/led',[SentecController::class, 'show']);
Route::get('/heater',[SentecController::class,'display']);
Route::get('/inverter',[SentecController::class,'create']);
Route::get('/solar',[SentecController::class,'make']);
Route::get('/project',[SentecController::class,'pick']);
Route::get('/contact',[SentecController::class,'take']);
Route::get('/company',[SentecController::class,'give']);
Route::get('/team',[SentecController::class,'team']);
Route::get('/health_details',[SentecController::class,'health']);
Route::get('/public_details',[SentecController::class,'public']);
Route::get('/commercial_details',[SentecController::class,'commercial']);
Route::get('/education_details',[SentecController::class,'education']);
Route::get('/home_details',[SentecController::class,'home']);
