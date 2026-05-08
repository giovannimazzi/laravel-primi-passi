<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Giovanni';
    return view('home', compact('name'));
})->name('home');
