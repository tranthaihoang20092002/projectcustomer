<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/register',[CustomerController::class,'register'])->name('customer.registerIndex');
Route::post('/register',[CustomerController::class,'authRegister'])->name('customer.registerCustomer');
Route::get('/login',[CustomerController::class,'login'])->name('customer.loginIndex');
Route::post('/login',[CustomerController::class,'authLogin'])->name('customer.loginCustomer');


