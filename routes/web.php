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

Route::get('/person', function() {
    return view('person', [
        'name' => 'Jonathan Beloro',
        'age' => 23,
        'address' => 'Bula, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
            [
            'name' => 'Naruto',
            'age' => 22
        ],
        [
            'name' => 'Sasuke',
            'age' => 16
        ],
    ],
    ]);
});