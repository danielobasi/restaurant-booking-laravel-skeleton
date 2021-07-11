<?php

use App\Http\Controllers\BookingBookingController;
use App\Http\Controllers\BookingRestaurantController;
use App\Http\Controllers\BookingRestaurantTableController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    //Any Route you put here would require user to be logged in for access

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('bookings',BookingBookingController::class);
Route::resource('restaurants',BookingRestaurantController::class);
Route::resource('tables',BookingRestaurantTableController::class);


/**
 ** Using route resources you can access the booking, restaurant and tables resources,
 * create new as needing with resource controller.
 * Eg. for booking resource:
 * GET /booking hits the index function on BookingBookingControlller
 * GET /booking/{id} hits the show function on BookingBookingControlller
 * POST /booking hits the store function on BookingBookingControlller
 * PATCH /booking hits the update function on BookingBookingControlller
 * DELETE/{id} /booking hits the destroy function on BookingBookingControlller
 * etc...
 */


