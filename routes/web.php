<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommnetsController;

// Route::get('/', [PostsController,'index'])->name('top');

Route::get('/', 'App\Http\Controllers\PostsController@index');

Route::resource('posts', 'PostsController', ['only' => ['create', 'store']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);

Route::resource('comments', 'CommentsController', ['only' => ['store']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update']]);

Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);