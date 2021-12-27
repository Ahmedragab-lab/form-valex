<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
        
    Route::get('/section/data', [Controllers\SectionController::class,'data'])->name('data');
    route::resource('section',Controllers\SectionController::class);


    route::resource('product',Controllers\ProductController::class);
});



require __DIR__.'/auth.php';
