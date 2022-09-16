<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\Contact\ContactController;

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

Route::prefix('/admin')->group(function () {
    // admin page routes
    Route::get('/', [PagesController::class, 'index'])->name('admin.index');

    // contact page routes
    Route::prefix('/contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
    });
});
