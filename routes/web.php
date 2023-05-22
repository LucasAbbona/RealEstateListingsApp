<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Navegation Routes

Route::get('/',[PagesController::class,'home'])->name('main');
Route::get('/register',[PagesController::class,'register']);
Route::get('/login',[PagesController::class,'login']);
Route::get('/property/{id}',[PagesController::class,'show']);
Route::get('/contact-us',[PagesController::class,'contact']);
Route::get('/explore',[PagesController::class,'explore']);
Route::get('/search',[PagesController::class,'search']);

// Broker Routes

Route::get('/list',[PagesController::class,'list'])->middleware('auth');
Route::get('/manage',[PagesController::class,'manage'])->middleware('auth');
Route::get('/edit/{id}',[PagesController::class,'edit'])->middleware('auth');
Route::get('/offers',[ApplicationsController::class,'offers'])->middleware('auth');
Route::get('/profile',[UserController::class,'profile'])->middleware('auth');

// Profile Routes

Route::put('/profile/update/{id}',[UserController::class, 'update'])->middleware('auth');

// Authentication Routes

Route::post('/register',[UserController::class,'create']);
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class, 'logout'])->middleware('auth');

// Listings Routes

Route::post('/list-property',[ListingsController::class,'create'])->middleware('auth');
Route::put('/edit/{id}',[ListingsController::class,'edit'])->middleware('auth');
Route::delete('/delete/{id}',[ListingsController::class,'destroy'])->middleware('auth');

// Offers Routes

Route::get('/send-offer/{id}',[PagesController::class,'offers']);
Route::post('/send-offer',[ApplicationsController::class,'sendOffer']);