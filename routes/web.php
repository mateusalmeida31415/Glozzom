<?php

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

//Home
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'home'])->name('home');
// About
Route::get('/about-us', [App\Http\Controllers\PrincipalController::class, 'about'])->name('about');
//Services
Route::get('/services', [App\Http\Controllers\PrincipalController::class, 'services'])->name('services');
//Blog
Route::get('/blog', [App\Http\Controllers\PrincipalController::class, 'blog'])->name('blog');
//Contact
Route::get('/contact', [App\Http\Controllers\PrincipalController::class, 'contact'])->name('contact');
//Newsletter
// Route::get('/newsletter', [App\Http\Controllers\PrincipalController::class, 'newsletter'])->name('newsletter');
