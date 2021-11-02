<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'getHome']);
Route::get('/auth/login', function () {
    return ('Login');
});
Route::get('/auth/logout', function () {
    return ('Logout');
});

Route::get('/catalog',[CatalogController::class, 'getIndex']);

Route::get('/catalog/show/{id}',[CatalogController::class, 'getShow']);


Route::get('/catalog/create', function () {
    return view('catalog.create');
});
// Route::get('/catalog/edit/{id}', function (($id) {
//     return view('catalog.edit', array('id'=>$id));
// });