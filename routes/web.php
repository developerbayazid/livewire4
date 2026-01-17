<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::livewire('/posts', 'post.index')->name('posts.index');
Route::livewire('/post/create', 'pages::post.create')->name('posts.create');
