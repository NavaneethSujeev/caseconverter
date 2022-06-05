<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [StudentController::class, 'login']);
Route::any('savelogin', [StudentController::class, 'savelogin']);
Route::any('dologin', [StudentController::class, 'dologin']);
Route::get('student', [StudentController::class, 'index']);
Route::any('savestudent', [StudentController::class, 'savestudent']);
Route::any('test', [StudentController::class, 'test']);


