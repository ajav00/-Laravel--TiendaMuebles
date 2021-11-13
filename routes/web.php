<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PagesPublicController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [PagesPublicController::class, 'getHome']);
Route::get('/aboutUs', [PagesPublicController::class, 'getAboutUs']);
Route::get('/catalog', [CatalogController::class, 'getAboutUs']);
