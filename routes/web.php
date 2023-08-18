<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['name' => '<script>alert(1)</script>']);
});

/*Route::get('/', function () {
    return view('greeting', [
        'name' => 'James'
    ]);
});*/


Route::get('blade', function () {
    return view('child');
});

Route::get('branch1', function () {
    return view('branch1');
});

Route::get('branch2', function () {
    return view('branch2');
});

