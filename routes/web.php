<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::view('/','welcome')->name("home");
Route::get('/blog',[PostController::Class,'index'])->name("posts.index");
Route::get('blog/create',[PostController::Class,'create'])->name('posts.create');
Route::post('blog',[PostController::Class,'store'])->name('posts.store');
Route::get('blog/{post}',[PostController::Class,'show']);

Route::view('/about','about')->name("about");
Route::view('/contact','contact')->name("contact");
