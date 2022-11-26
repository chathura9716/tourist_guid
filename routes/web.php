<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\VehicalController;
use App\Http\Controllers\TouristregisterController;
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

//auth routes this is for admin routes
Auth::routes();

Route::get('/', [WelcomeController::class ,'welcome'])->name('welcome');



//guest views
Route::get('/loginpage', [HomeController::class, 'loginpage'])->name('loginpage');
Route::get('/blog', [HomeController::class, 'Blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('/places', [App\Http\Controllers\PlaceController::class, 'welcomeplace'])->name('places');
Route::get('/ViewAllPlaces',[PlaceController::class,'ViewAllPlaces']);
Route::get('/hotels', [HotelController::class, 'welcomehotel'])->name('hotel');
Route::get('/place/{placeId}/show', [PlaceController::class, 'show'])->name('place.show');




//posts
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');

Route::group(['middleware'=>'auth'], function(){


    
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('allposts');
Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/addpost', [App\Http\Controllers\PostController::class, 'Addpost'])->name('addpost');
});
//add hotels
Route::group(['middleware'=>'auth'], function(){
Route::post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');
Route::get('/hotel/{hotelId}/edit', [HotelController::class, 'edit'])->name('hotel.edit');
Route::post('/hotel/{hotelId}/update', [HotelController::class, 'update'])->name('hotel.update');
Route::get('/hotel/{hotelId}/delete', [HotelController::class, 'delete'])->name('hotel.delete');
Route::get('/addhotelview', [App\Http\Controllers\HotelController::class, 'Addhotelview'])->name('addhotel');

Route::get('/accepthotel/{bookingId}', [App\Http\Controllers\HotelBookingController::class, 'accept'])->name('accepthotel');
Route::get('/cancelhotel/{bookingId}', [App\Http\Controllers\HotelBookingController::class, 'cancel'])->name('cancelhotel');
});

//places add crud

//this is only for Admin

    Route::post('/place/store', [PlaceController::class, 'store'])->name('place.store');
    Route::get('/place/{placeId}/edit', [PlaceController::class, 'edit'])->name('place.edit');
    Route::post('/place/{placeId}/update', [PlaceController::class, 'update'])->name('place.update');
    Route::get('/place/{placeId}/delete', [PlaceController::class, 'delete'])->name('place.delete');
    Route::get('/addplaces', [DashboardController::class, 'addplacesview'])->name('admin.addplaces');

//vehical add
    Route::post('/vehical/store', [VehicalController::class, 'store'])->name('vehical.store');
    Route::get('/vehical/{vehicalId}/edit', [VehicalController::class, 'edit'])->name('vehical.edit');
    Route::post('/vehical/{vehicalId}/update', [VehicalController::class, 'update'])->name('vehical.update');
    Route::get('/vehical/{vehicalId}/delete', [VehicalController::class, 'delete'])->name('vehical.delete');

//admin users pages


Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
  
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/users/{userId}/delete', [UserController::class, 'delete'])->name('user.delete');
    Route::post('/users/{id}/update', [UserController::class, 'adminUpdate'])->name('user.update');
    Route::post('/users/create', [UserController::class, 'createUser'])->name('user.create');


    Route::get('/users/addpage', [UserController::class, 'createUserPage'])->name('user.createPage');
    Route::post('/users/createHotelAgency', [UserController::class, 'createHotelAgency'])->name('user.createHotelAgency');


    //views
    // Route::get('/addhotel', [UserController::class, 'addhotel'])->name('admin.addhotel');
    Route::get('/addtravel', [UserController::class, 'addtravel'])->name('admin.addtravel');
    Route::post('/vehical/store', [VehicalController::class, 'store'])->name('vehical.store');
    Route::get('/vehical/{vehicalId}/delete', [VehicalController::class, 'delete'])->name('vehical.delete');
    Route::get('/vehical/{vehicalId}/edit', [VehicalController::class, 'edit'])->name('vehical.edit');
    Route::post('/vehical/{vehicalId}/update', [VehicalController::class, 'update'])->name('vehical.update');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

});
   
//tourist auth routes
  
        Route::get('/create_tourist', [App\Http\Controllers\TouristController::class, 'createTourist'])->name('create_tourist');


    
        Route::post('/create', [App\Http\Controllers\TouristregisterController::class, 'create'])->name('create');

      //  Route::get('/tourist_dashboard', [App\Http\Controllers\TouristController::class, 'dashboardTourist'])->name('tourist_dashboard');
        Route::get('/touristWelcome', [App\Http\Controllers\TouristController::class, 'touristWelcome'])->name('touristWelcome');
        Route::get('/touristProfile', [App\Http\Controllers\TouristController::class, 'touristProfile'])->name('touristProfile');
        Route::get('/touristBlog', [App\Http\Controllers\TouristController::class, 'touristBlog'])->name('touristBlog');
        Route::get('/touristContact', [App\Http\Controllers\TouristController::class, 'touristContact'])->name('touristContact');
        Route::get('/touristPlaces', [App\Http\Controllers\TouristController::class, 'touristPlace'])->name('touristPlace');
        Route::get('/touristHotels', [TouristController::class, 'touristHotel'])->name('touristHotel');
//booking hotel
        Route::post('/bookhotel', [App\Http\Controllers\HotelBookingController::class, 'store'])->name('bookhotel');
        Route::get('/bookhotel/{bookingId}/delete', [HotelBookingController::class, 'delete'])->name('bookhotel.delete');
        Route::get('/hotel/{hotelId}/view', [HotelController::class, 'show'])->name('hotel.show');


Route::get('/search' ,[HotelController::class, 'search'])->name('search');



Route::get('user-management', [UserController::class, 'usermanege'])->name('user-management');
Route::get('logoutuser', [UserController::class, 'logout'])->name('logoutuser');
Route::get('placesmanagement', [PlaceController::class, 'placemanage'])->name('placesmanagement');
Route::get('vehicalmanagement', [VehicalController::class, 'vehicalmanage'])->name('vehicalmanagement');

Route::get('hotelmanage', [HotelController::class, 'hotelmanage'])->name('hotelmanage');

Route::get('hotelblog', [HomeController::class, 'hotelblog'])->name('hotelblog');
Route::get('touristblog', [HomeController::class, 'touristblog'])->name('touristblog');

Route::get('/editprofile/{id}', [TouristController::class, 'editprofile'])->name('editprofile');
Route::post('/touristprofileupdate', [TouristController::class, 'touristprofileupdate'])->name('touristprofileupdate');



Route::get('billing', [HotelBookingController::class,'billing']) ->name('billing');


Route::get('/hagency/{id}/edit', [UserController::class, 'edithotelagency'])->name('edithotelagency');
Route::post('/hagency/{id}/update', [UserController::class, 'hotelAgentUpdate'])->name('hotelAgentUpdate');

