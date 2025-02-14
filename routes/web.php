<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::post('/send-message', [AppController::class,"sendMessage"])->name("send-message");
