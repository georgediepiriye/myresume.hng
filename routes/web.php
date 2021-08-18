<?php

use App\Http\Controllers\WelcomeController;
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
Route::post('view_resume',[WelcomeController::class,'viewResume'])->name('view_resume');
Route::get('resume',[WelcomeController::class,'showResume'])->name('resume');
Route::post('send_message',[WelcomeController::class,'sendMessage'])->name('send_message');