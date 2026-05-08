<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Giovanni';
    return view('home', compact('name'));
})->name('home');

Route::get('/bgprimary', function () {
    $bg = 'bg-primary';
    return view('bgprimary', compact('bg'));
})->name('bgprimary');

Route::get('/bgsuccess', function () {
    $bg = 'bg-success';
    return view('bgsuccess', compact('bg'));
})->name('bgsuccess');
