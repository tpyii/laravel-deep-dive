<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('signin', 'signin')->name('signin');

Route::resource('categories', CategoriesController::class);

Route::resource('news', NewsController::class)->parameters([
    'news' => 'new:slug',
])->shallow();

Route::resource('category.news', NewsController::class)->parameters([
    'category' => 'category:slug?',
])->shallow();

Route::group([
    'prefix' => 'feedback',
    'as' => 'feedback.',
], function()
{
    Route::get('/', [FeedbackController::class, 'create'])->name('create');
    
    Route::post('/', [FeedbackController::class, 'store'])->name('store');
});

Route::group([
    'prefix' => 'order',
    'as' => 'order.',
], function()
{
    Route::get('/', [OrderController::class, 'create'])->name('create');
    
    Route::post('/', [OrderController::class, 'store'])->name('store');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function ()
{
    Route::view('/', 'admin.welcome')->name('welcome');

    Route::resource('categories', AdminCategoriesController::class)->parameters([
        'categories' => 'category:slug',
    ]);

    Route::resource('news', AdminNewsController::class)->parameters([
        'news' => 'new:slug',
    ]);
});
