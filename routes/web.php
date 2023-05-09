<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/category', function () {
    return view('frontend.category');
});

Route::get('/single-product', function () {
    return view('frontend.single-product');
});

Route::get('/blogs', function () {
    return view('frontend.blogs');
});

Route::get('/single-blog', function () {
    return view('frontend.single-blog');
});

Route::get('/media', function () {
    return view('frontend.media');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/site', function () {
    return view('frontend.site');
});

Route::get('/menu', function () {
    return view('frontend.menu');
});

Route::get('/page', function () {
    return view('frontend.page');
});


Route::get('/wholesale', function () {
    return view('frontend.wholesale');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
