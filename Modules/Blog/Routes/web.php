<?php

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

// Route::middleware('auth:web')->prefix('blog')->group(function() {
//     Route::get('/', 'BlogController@index');
// });

use Modules\Blog\Http\Controllers\BlogController;

Route::prefix('blog')->group(function() {
    // Route::get('/', 'BlogController@index');
    // Route::post('/','BlogController@store')->name('blog.store');
    Route::get('/table','BlogController@table')->name('blog.table');
});

Route::resource('blog', BlogController::class)->middleware('auth');
