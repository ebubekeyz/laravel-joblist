<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\NewsletterController;

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
///All listings
Route::get('/', [ListingController::class, 'index']);




//Show create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');



//Store listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');



//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');




//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');



//Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');


//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



//Show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//create new user

Route::post('/users', [UserController::class, 'store']);



//log user out
Route::post('/logout', [UserController::class, 'logout']);



//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


Route::get('/newsletter/subscribe', [NewsletterController::class, 'newsletterForm'])->middleware('guest');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'storeEmail'])->name('email.store');
