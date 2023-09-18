<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/signin', [UserController::class, 'signin']);

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/manage-avatar', [UserController::class, 'storeAvatar'])->middleware('auth');
