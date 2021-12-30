<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function (string $name) {
    echo "Привет, {$name}!";
});

Route::get('/info', function () {
    echo 'Страница с информацие о проекте.';
});

Route::get('/news/{id}', function (int $id) {
    echo "<h1>Новость №{$id}</h1><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum beatae vel dicta quo ut autem, temporibus id consectetur eaque atque ipsum facilis suscipit omnis dolores obcaecati labore quam. Quisquam, repellendus?</p>";
});
