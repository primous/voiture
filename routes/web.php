<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Reinex Automobile
|--------------------------------------------------------------------------
|
| Route principale de la landing page haute conversion Reinex.
|
*/

Route::view('/', 'landing.reinex')->name('home');
