<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FavouriteBlogController;


use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog',[BlogController::class, 'index'])->name('blog');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/favourite_blog',[FavouriteBlogController::class, 'index'])->name('favourite_blog');

});

require __DIR__.'/auth.php';
