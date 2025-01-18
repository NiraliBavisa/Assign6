<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/index',[ContactController::class,'index']);
Route::get('/contact',[ContactController::class,'contact']);
Route::post('/store',[ContactController::class,'store']);