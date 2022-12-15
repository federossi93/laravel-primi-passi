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
    $welcome = 'Welcome to ';
    $title = 'Laravel';
    return view('Homepage', compact('welcome', 'title'));
})->name('home');

Route::get('/About', function(){
    $data = [
        'page_title' => 'About',
        'description' => 'lorem7',
        'film_list' => [
            'matrix',
            'ritorno al futuro',
            'altrimenti ci arrabiamo'
        ],
    ];
    return view('About', $data);
})->name('about');
