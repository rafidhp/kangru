<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
})->name('dashboard');

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth', 'auth')->name('auth.auth');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/login/post', 'postlogin')->name('auth.postlogin');
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/register/post', 'postregister')->name('auth.postregister');
    Route::get('/logout', 'logout')->name('auth.logout');
});

Route::controller(TestController::class)->middleware('auth')->group(function () {
    Route::get('/mbti-test', 'index')->name('mbti_test');
    Route::post('/mbti-test/store', 'store')->name('mbti_test.store');
    Route::get('/mbti-test/result', 'result')->name('mbti_test.result');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/article', 'index')->name('article.index');
    Route::get('/article/create', 'create')->middleware(['auth', 'can:isAdmin'])->name('article.create');
    Route::post('/article/store', 'store')->middleware(['auth', 'can:isAdmin'])->name('article.store');
    Route::get('/article/show/{article_id}', 'show')->name('article.show');
});
