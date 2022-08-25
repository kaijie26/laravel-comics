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

    $series_array = [];
    $series_array[] = config('comics');

    $data = [
        'dc_array' => $series_array,
    ];

    return view('home' , $data );
})->name('homepage');


Route::get('/serie/{id}', function ($id) {
    $series_array = config('comics');
    $current_serie = [];

    foreach($series_array as $single_serie){
        if($single_serie['id'] == $id) {
            $current_serie = $single_serie;
        }

    };

    $data = [
        'current_serie' => $current_serie
    ];


    return view('single-serie', $data);
})->name('single-serie');