<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Auth::routes(['register' => false]);


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::put('/changePass', [App\Http\Controllers\Auth\ChangePassController::class, 'changePass'])->name('change.pass');


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
    Route::put('/unit/{id}/{type}', [App\Http\Controllers\Cashier\ProgramController::class, 'unit'])->name('managefees.unit');
    Route::delete('/delete/{id}/{cfeeid}', [App\Http\Controllers\Cashier\ProgramController::class, 'delete']);
});

Route::prefix('/payment')->group(function(){
    Route::put('/{id}', [App\Http\Controllers\Cashier\PaymentController::class, 'store'])->name('payment.store');
});

Route::prefix('/studentfee')->group(function(){
    Route::get('/', [App\Http\Controllers\Cashier\StudentController::class, 'indexFee'])->name('studentfee.index');
    Route::get('/view/{id}', [App\Http\Controllers\Cashier\StudentController::class, 'view'])->name('studentfee.view');
});

Route::prefix('/billing')->group(function(){
    Route::get('/', [App\Http\Controllers\Cashier\BillingController::class, 'index'])->name('payment.index');
    Route::post('/process-bill',  [App\Http\Controllers\Cashier\BillingController::class, 'processBill']);
    Route::post('/store/{billid}', [App\Http\Controllers\Cashier\BillingController::class, 'storeBill'])->name('billing.store');
});


Route::get('/student', [App\Http\Controllers\Cashier\StudentController::class, 'index'])->name('student.index');



