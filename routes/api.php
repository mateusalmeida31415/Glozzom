<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Cadastro na newsletter
Route::post('/newsletter', [App\Http\Controllers\PrincipalController::class, 'newsletter'])->name('newsletter');

//Recupera os post da blog section
Route::get('/posts/{itens?}', [App\Http\Controllers\PrincipalController::class, 'posts'])->name('posts');
