<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

//FrontPage Routes

Route::group(['prefix'=>'user'], function(){
    Route::get("/home",[FrontController::class, 'home'])->name('home');
});