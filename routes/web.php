<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PublicPagesController;
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

Route::get('/', [PublicPagesController::class, 'getHome']);
Route::get('/aboutUs', [PublicPagesController::class, 'getAboutUs']);
Route::get('/catalog', [PublicPagesController::class, 'getCatalog']);
Route::get('/createAccount', [PublicPagesController::class, 'getCreateAccount']);
Route::get('/login', [PublicPagesController::class, 'getLogin']);
