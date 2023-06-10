<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontController::class, 'blog_details'])->name('blog-details');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

