<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetController;
use App\Http\Controllers\WordController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function () {
//    return view('latest');
//})->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/library', [SetController::class, 'index']);
    Route::get('/create-set', [WordController::class, 'create_set']);
    Route::post('/store_set', [WordController::class, 'store_set']);
    Route::get('/word_list/{id}', [WordController::class, 'word_list'])->whereNumber('id');
    Route::get('/delete/{id}', [SetController::class, 'delete'])->whereNumber('id');
    Route::get('/latest/{id}', [WordController::class, 'latest']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//

Route::get('/logout', function () {
    Auth::logout();
});

//TODO Сверстать страницу регистрации
//TODO Сверстать страницу логина
//TODO Сверстать 404 страницу
//TODO Если пользователь не зареган, то view welcome, если зареган то view latest показывать как главную
//TODO Сверстать страницу forgot-password
//TODO Не применяются стили
