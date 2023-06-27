<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\productController;

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

Route::get('/login', [authController::class, 'login'] )->name('login');
Route::post('/login', [authController::class, 'loginAccount'] )->name('login');
Route::delete('/login', [authController::class, 'logout'] )->name('logout');

//Admin All Dashboard   
Route::get('/dashboard/products', [productController::class, 'index'])->name('adminProduct');
Route::get('/dashboard/products/delete/{id}', [productController::class, 'destroy'])->name('deleteProduct');
Route::get('/dashboard/products/edit/{id}', [productController::class, 'edit'])->name('productEdit');
Route::get('/dashboard/products/addProduct', [productController::class, 'create'])->name('addProduct');
Route::post('/dashboard/products/addProduct', [productController::class, 'store'])->name('addProducts');
Route::post('/dashboard/products/update/{id}', [productController::class, 'update'])->name('updateProduct');

Route::get('/dashboard/staff', [staffController::class, 'index'])->name('adminStaff');
Route::get('/dashboard/staff/delete/{id}', [staffController::class, 'destroy'])->name('deleteStaff');
Route::get('/dashboard/staff/edit/{id}', [staffController::class, 'edit'])->name('staffEdit');
Route::get('/dashboard/staff/addStaff', [staffController::class, 'create'])->name('addStaff');
Route::post('/dashboard/staff/addStaff', [staffController::class, 'store'])->name('addstaff');
Route::post('/dashboard/staff/update/{id}', [staffController::class, 'update'])->name('updateStaff');
