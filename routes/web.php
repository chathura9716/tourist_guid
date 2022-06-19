<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\Admin\DashboardController;
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


Auth::routes();
Route::get('/', [WelcomeController::class ,'welcome'])->name('welcome');



Route::get('/about', [App\Http\Controllers\HomeController::class, 'About'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'Blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'Contact'])->name('contact');
Route::get('/places', [App\Http\Controllers\HomeController::class, 'Places'])->name('places');
//posts
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');
Route::group(['middleware'=>'auth'], function(){
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('posts.all');
    Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
    Route::get('/addpost', [App\Http\Controllers\PostController::class, 'Addpost'])->name('addpost');
    

});
//place
Route::get('/addplace', [App\Http\Controllers\HomeController::class, 'Addplace'])->name('addplace');
//Route::get('/place/{placeId}/show', [PlaceController::class, 'show'])->name('posts.show');
Route::group(['middleware'=>'auth'], function(){
    Route::post('/place/store', [PlaceController::class, 'store'])->name('place.store');
    // Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('posts.all');
    // Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
    // Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');
    // Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
    

});
//user


Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/users/create', [UserController::class, 'createUser'])->name('user.create');
    Route::get('/addhotel', [UserController::class, 'addhotel'])->name('admin.addhotel');
    Route::get('/addtravel', [UserController::class, 'addtravel'])->name('admin.addtravel');
    Route::get('/adddriver', [UserController::class, 'adddriver'])->name('user.travel.adddriver');
    Route::get('/hotel', [UserController::class, 'hotel'])->name('user.hotel.addhotel');
    Route::get('/addplaces', [App\Http\Controllers\Admin\DashboardController::class, 'addplacesview'])->name('admin.addplaces');
   
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
});
   
//admin
// Route::group(['middleware'=>['admin','auth']], function(){
//     Route::get('/profile', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('profile');
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
//     Route::post('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
// });


