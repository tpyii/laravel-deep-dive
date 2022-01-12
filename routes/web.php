<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

Route::view('/', 'welcome');

Route::view('signin', 'signin')->name('signin');

Route::resource('categories', CategoriesController::class);

Route::resource('news', NewsController::class);

Route::resource('category.news', NewsController::class)->shallow();

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function ()
{
    Route::resource('news', AdminNewsController::class);
});
