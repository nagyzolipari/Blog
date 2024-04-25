<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\IndexController;

//Route::get('/index', [IndexController::class, 'index']);

use App\Http\Controllers\TopicController;

Route::get('/topics', [TopicController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
