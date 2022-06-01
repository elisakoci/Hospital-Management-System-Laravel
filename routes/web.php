<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class, 'addview']);/* admin dashboard*/
Route::post('/upload_doctor',[AdminController::class, 'upload']);/*doctor upload*/
Route::post('/appointment',[HomeController::class, 'appointment']);/* reserrvo nje appointments*/
Route::get('/myappointment',[HomeController::class, 'myappointment']);/*myappointment*/
Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint']);/*user cancels an appoinment*/


Route::get('/showappointment',[AdminController::class, 'showappointment']);/*admin */
Route::get('/approved/{id}',[AdminController::class, 'approved']);
Route::get('/canceled/{id}',[AdminController::class, 'canceled']);

