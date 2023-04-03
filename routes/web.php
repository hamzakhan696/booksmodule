<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
    return view('auth.login');
});

    //Route::post('/login',[BookController::class,'login']);
Route::post('/books/add',[BookController::class,'addBook']);

Route::view('books/add','books.add');


Route::get('/books',[BookController::class,'view']);
Route::get('/delete/{id}',[BookController::class,'delete']);

Route::get('books/update/{id}',[BookController::class,'update']);
Route::post('books/update',[BookController::class,'edit']);

//Route::post('/books', 'BookController@addBook')->name('books.add')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
