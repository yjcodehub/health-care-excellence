<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}'], function () {
    //website route
    // Route::get('/', 'HomeController@home')->name('index')->middleware('setLocale');
    Route::view('/', 'index')->middleware('setLocale');
    Route::post('/save-application', [HomeController::class, 'saveApplication']);
    // Route::get('/edit-record/{id?}', 'HomeController@store')->name('edit-record')->middleware('setLocale');
});