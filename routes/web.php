<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Mail\Test;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'frontend.'],function(){
    Route::get('/',             [FrontendController::class , 'index']);
    Route::post('/subscribe',   [FrontendController::class , 'subscribe'])->name('subscribe');
});

Route::get('/test',function(){
    Mail::to('kurdi313@gmail.com')->send(new Test());
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
