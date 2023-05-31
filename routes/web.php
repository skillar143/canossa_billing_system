<?php

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

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/fee')->group(function(){
    Route::get('/{type}', [App\Http\Controllers\Cashier\FeeController::class, 'index'])->name('fee.index');
    Route::post('/Add/{type}', [App\Http\Controllers\Cashier\FeeController::class, 'store'])->name('fee.store');
    Route::put('/update/{id}', [App\Http\Controllers\Cashier\FeeController::class, 'update']);
    Route::delete('/delete/{id}',[App\Http\Controllers\Cashier\FeeController::class, 'destroy']);

});

Route::prefix('/discount')->group(function(){
    Route::get('/', [App\Http\Controllers\Cashier\DiscountController::class, 'index'])->name('discount.index');
    Route::post('/Add', [App\Http\Controllers\Cashier\DiscountController::class, 'store'])->name('discount.store');
    Route::put('/update/{id}', [App\Http\Controllers\Cashier\DiscountController::class, 'update']);
    Route::delete('/delete/{id}',[App\Http\Controllers\Cashier\DiscountController::class, 'destroy']);

});

Route::prefix('/managefees')->group(function(){
    Route::get('/', [App\Http\Controllers\Cashier\ProgramController::class, 'index'])->name('managefees.index');
    Route::get('/view/{id}', [App\Http\Controllers\Cashier\ProgramController::class, 'show'])->name('managefees.show');
    Route::post('/add/{id}/{type}/{sem}/{year}', [App\Http\Controllers\Cashier\ProgramController::class, 'storeFees'])->name('managefees.store');
    Route::put('/unit/{id}', [App\Http\Controllers\Cashier\ProgramController::class, 'unit'])->name('managefees.unit');

});

Route::get('/student', [App\Http\Controllers\Cashier\StudentController::class, 'index'])->name('student.index');

Route::get('/discount', [App\Http\Controllers\Cashier\DiscountController::class, 'index'])->name('discount.index');



