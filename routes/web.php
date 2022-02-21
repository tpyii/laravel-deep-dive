<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Admin\SourcesController;
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

Route::view('/', 'home')->name('home');

Route::resource('categories', CategoriesController::class);

Route::resource('news', NewsController::class)->parameters([
    'news' => 'new:slug',
])->shallow();

Route::resource('category.news', NewsController::class)->parameters([
    'category' => 'category:slug?',
])->shallow();

Route::group([
    'prefix' => 'profile',
    'as' => 'profile.',
    'middleware' => 'auth',
], function()
{
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');

    Route::put('/', [ProfileController::class, 'update'])->name('update');
});
    
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is.admin'],
], function ()
{
    Route::view('/', 'admin.welcome')->name('welcome');

    Route::resource('categories', AdminCategoriesController::class)->parameters([
        'categories' => 'category:slug',
    ]);

    Route::resource('news', AdminNewsController::class)->parameters([
        'news' => 'new:slug',
    ]);

    Route::resource('users', UsersController::class);

    Route::get('parser', ParserController::class)->name('parser');

    Route::resource('sources', SourcesController::class);
});

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.',
    'middleware' => 'guest',
], function ()
{
    Route::get('{network}/redirect', [SocialController::class, 'redirect'])->name('redirect');

    Route::get('{network}/callback', [SocialController::class, 'callback'])->name('callback');
});

Auth::routes();
