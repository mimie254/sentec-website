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

Route::prefix("services")->group(function (){
    Route::get('water-heating-systems',[SentecController::class,'display']);
    Route::get('solar-photovoltaic-systems',[SentecController::class,'make']);
    Route::get('/LED-lighting-solutions',[SentecController::class, 'show']);
    Route::get('/power-backup-systems',[SentecController::class,'create']);
});



Route::get('/projects',[SentecController::class,'pick']);
Route::get('/contact',[SentecController::class,'take']);
Route::get('/company',[SentecController::class,'give']);
Route::get('/team',[SentecController::class,'team']);
Route::get('/projects/health-sector',[SentecController::class,'health']);
Route::get('/projects/public-works',[SentecController::class,'public']);
Route::get('/projects/commercial-sector',[SentecController::class,'commercial']);
Route::get('/projects/education-sector',[SentecController::class,'education']);
Route::get('/projects/home-systems',[SentecController::class,'home']);
