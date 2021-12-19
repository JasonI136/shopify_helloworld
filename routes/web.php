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

Route::get('/page1', function () {
    return view('page1'); // All View files are the page itself (located in resources/views/...)
}); // This will open a new page

Route::get('/foods', function () {
    return ['food' => 'burger', 'meat' => 'beef'];
}); // This one will return JSON

