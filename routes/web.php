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


    Route::get('/menu', [
    'uses' => 'Pintores@menu',
    'as' =>'Inicio' ]);

    Route::get('/vincent', [
    'uses' => 'Pintores@vincent',
    'as' =>'Van Gogh' ]);

    Route::get('/frida', [
        'uses' => 'Pintores@frida',
        'as' =>'Kahlo' ]);

        Route::get('/davinci', [
            'uses' => 'Pintores@davinci',
            'as' =>'Leonardo' ]);
            
        Route::get('/miguel', [
            'uses' => 'Pintores@miguel',
            'as' =>'Miguel' ]);
            Route::get('/pablo', [
                'uses' => 'Pintores@pablo',
                'as' =>'Miguel' ]);