<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'welcome']);

Route::middleware('auth')->group(function () {
    Route::get('/library', [WordController::class, 'index']);
    Route::get('/create', [WordController::class, 'create']);
    Route::post('/store', [WordController::class, 'store']);
    Route::get('/show/{id}', [WordController::class, 'show']);
    Route::get('/edit/{id}', [WordController::class, 'edit']);
    Route::post('/update/{id}', [WordController::class, 'update']);
    Route::get('/destroy/{id}', [WordController::class, 'destroy']);
    Route::get('/latest', [PageController::class, 'latest']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//

Route::get('/logout', function () {
    Auth::logout();
});

//TODO Если пользователь не зареган, то view welcome, если зареган то view latest показывать как главную
