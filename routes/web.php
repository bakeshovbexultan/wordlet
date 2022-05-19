<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetController;
use App\Http\Controllers\WordController;
use App\Models\Set;
use App\Models\Word;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/', [SetController::class, 'index']);

Route::get('/library', [SetController::class, 'index']);

Route::get('/logout', function () {
    Auth::logout();
});

Route::get('/create-set', [WordController::class, 'create_set']);

Route::post('/store_set', [WordController::class, 'store_set']);

Route::get('/word_list/{id}', [WordController::class, 'word_list'])->whereNumber('id');

Route::get('/delete/{id}', [SetController::class, 'delete'])->whereNumber('id');

Route::get('/test', function(Request $request) {
    $user = Auth::user()->id;
    dd($user);
});
