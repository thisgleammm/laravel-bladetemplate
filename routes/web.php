<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', [
        'name' => 'Laravel'
    ]);
});

Route::get('/world', function () {
    return view('hello.world', [
        'name' => 'Laravel'
    ]);
});
Route::get('/html-encoding', function (Request $request) {
    return view('html-encoding', [
        'name' => $request->input('name')
    ]);
});