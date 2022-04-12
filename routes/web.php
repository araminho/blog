<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CountryController;


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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/test', function () {
    return view('test', [
        'name' => '<b>Aram</b>',
        'records' => [1, 2, 3],
        'i' => 'sssss'
    ]);
});

Route::get('blade', function () {
    return view('child');
});
    

Route::get(
    'posts/{post}/comments/{comment?}', 
    [IndexController::class, 'post']
)-> name('posts_and_comments');;
    
    

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });

    Route::get('/addresses', function () {
        // Matches The "/admin/addresses" URL
    });
});


Route::get('/user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

    
Route::get('/countries', [CountryController::class, 'index']);