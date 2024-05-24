<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/posts/create',     [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
    Route::post('/posts',           [PostController::class, 'store'])->name('posts.store');
    Route::put('/posts/{id}',       [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}',    [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts',            [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/list',       [PostController::class, 'list'])->name('posts.list');
Route::get('/posts/{id}',       [PostController::class, 'show'])->name('posts.show');

require __DIR__.'/auth.php';

// Route::get('/posts', [PostsController::class, 'index']);
