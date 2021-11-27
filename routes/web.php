<?php

use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;
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

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');

Auth::routes();

//$ Group for follows
Route::prefix('/follow')->group(function () {
    Route::post('/{user}', [App\Http\Controllers\FollowController::class, 'store'])->name('follow.store');
});

//$ Group for profiles
Route::prefix('/profile')->group(function () {

    Route::get('/{user}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

    Route::get('/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});


//$ Group for posts
Route::prefix('/p')->group(function () {

    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

    Route::get('/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
});
