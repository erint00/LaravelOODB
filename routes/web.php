<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PurchaseController;
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
    Route::get('add_computer',[ComputerController::class,'create'])->name('add_computer');
    Route::post('store_computer',[ComputerController::class,'store'])->name('store_computer');
    Route::get('brands',[BrandController::class,'index'])->name('brands');
    Route::post('delete_computer',[ComputerController::class,'delete'])->name('delete_computer');
    Route::post('edit_computer',[ComputerController::class,'edit'])->name('edit_computer');
    Route::post('update_computer',[ComputerController::class,'update'])->name('update_computer');
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
