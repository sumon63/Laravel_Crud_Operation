<?php

use App\Http\Controllers\UserController;
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
Route::get('/show-data',[UserController::class,'showData']);
Route::get('/add-data',[UserController::class,'addData']);
Route::post('/store-data',[UserController::class,'storeData']);
Route::get('/edit-data/{id}',[UserController::class,'editData']);
Route::post('/update-data/{id}',[UserController::class,'updateData']);
Route::get('/delete-data/{id}',[UserController::class,'deleteData']);




