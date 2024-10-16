<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/search', [AdminController::class, 'search']);
Route::delete('/admin/delete', [AdminController::class, 'delete']);
// Route::get('/register', [AdminController::class, 'register']);
// Route::post('/register/create', [AdminController::class, 'create']);
// Route::get('/login', [AdminController::class, 'login']);
