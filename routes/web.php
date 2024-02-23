<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function() {
    Route::get('/',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('computers',[ComputerController::class,'index'])->name('computers');
    Route::get('purchases',[PurchaseController::class,'index'])->name('purchases');
    Route::get('customers',[CustomerController::class,'index'])->name('customers');
    Route::get('add_computer',[ComputerController::class,'create'])->name('add_computer');
    Route::get('add_customer',[CustomerController::class,'create'])->name('add_customer');
    Route::post('store_computer',[ComputerController::class,'store'])->name('store_computer');
    Route::post('store_customer',[CustomerController::class,'store'])->name('store_customer');
    Route::post('store_brand',[BrandController::class,'store'])->name('store_brand');
    Route::get('brands',[BrandController::class,'index'])->name('brands');
    Route::get('add_brand',[BrandController::class,'create'])->name('add_brand');
    Route::post('delete_computer',[ComputerController::class,'delete'])->name('delete_computer');
    Route::post('delete_customer',[CustomerController::class,'delete'])->name('delete_customer');
    Route::post('delete_brand',[BrandController::class,'delete'])->name('delete_brand');
    Route::post('edit_computer',[ComputerController::class,'edit'])->name('edit_computer');
    Route::post('edit_customer',[CustomerController::class,'edit'])->name('edit_customer');
    Route::post('edit_brand',[BrandController::class,'edit'])->name('edit_brand');
    Route::post('update_computer',[ComputerController::class,'update'])->name('update_computer');
    Route::post('update_customer',[CustomerController::class,'update'])->name('update_customer');
    Route::post('update_brand',[BrandController::class,'update'])->name('update_brand');
    Route::post('file_add',[ComputerController::class,'file_add'])->name('file_add');
    Route::post('process',[ComputerController::class,'process'])->name('process');

    
});
 





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
