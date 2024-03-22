<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
route::resource('announcement', AnnouncementController::class);
route::resource('categories', CategoryController::class);

Route::get('/test',[PageController::class,  'test'])->name('test');
Route::get('/create',[PageController::class,  'announcementCreate'])->name('announcement.create')->middleware('auth');


