<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//this is for vivek new changes  
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'check']);

Route::post('/tokenvalidate', [LoginController::class, 'tokenvalidate']);
Route::post('/hotelRegister', [HotelController::class, 'store']);
Route::get('/myhotel', [HotelController::class, 'showByuserId']);
//Route::post('/loginmail', [LoginController::class, 'getdetail']);

Route::post('/loginmail', [LoginController::class, 'getdetail']);

