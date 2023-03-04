<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;

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

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/package/{package_slug}', [HomePageController::class, 'packageDetailIndex'])->name('package_detail');


Route::get('/about', function () {
    return view('pages.frontend.about');
});
Route::get('/contact', function () {
    return view('pages.frontend.contact');
});
Route::get('/booking-form', function () {
    return view('pages.frontend.booking-form');
});
Route::get('/packages-detail', function () {
    return view('pages.frontend.packages-detail');
});
