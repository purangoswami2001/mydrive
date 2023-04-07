<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\DirectoryController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\FileController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/register',[UserController::class,'regis'])->middleware('alreadyLoggedIn');
Route::post('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/directory',[UserController::class,'checkuser']);
Route::get('/directory',[DirectoryController::class,'showdir'])->middleware('isLoggedIn');
Route::get('/logout',[UserController::class,'logout']);
Route::get('/directory/new_dir/{id}',[DirectoryController::class,'new_dir'])->middleware('isLoggedIn');
Route::get('/directory/upload_file/{id}',[DirectoryController::class,'upload_file'])->middleware('isLoggedIn');
Route::post('/directory/upload_file',[FileController::class,'upload'])->middleware('isLoggedIn');
Route::post('/create_folder',[DirectoryController::class,'create_folder'])->middleware('isLoggedIn');
// Route::get('/directory/show',[DirectoryController::class,'showdir'])->middleware('isLoggedIn');
Route::get('/directory/getDir/{id}',[DirectoryController::class,'opendir'])->middleware('isLoggedIn');






