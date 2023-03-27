<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function (){

    Route::get('/', 'home')->name('home');   

    Route::get('blog/{post:slug}', 'post')->name('post');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('posts', PostController::class)->except(['show']);


require __DIR__.'/auth.php';
