<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthAdvertiserController;
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
    Route::get('/login', 'login')->middleware('guest')->name('auth.login');
    Route::post('/login/post', 'postlogin')->middleware('guest')->name('auth.postlogin');
    Route::get('/register', 'register')->middleware('guest')->name('auth.register');
    Route::post('/register/post', 'postregister')->middleware('guest')->name('auth.postregister');
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout');
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
    Route::get('/article/show/{article_id}', 'show')->middleware('auth')->name('article.show');
    Route::get('/article/edit/{article_id}', 'edit')->middleware(['auth', 'can:isAdmin'])->name('article.edit');
    Route::post('/article/update/{article_id}', 'update')->middleware(['auth', 'can:isAdmin'])->name('article.update');
    Route::get('/article/destroy/{article_id}', 'destroy')->middleware(['auth', 'can:isAdmin'])->name('article.destroy');
    Route::get('/article/image/destroy/{article_id}', 'imageDestroy')->middleware(['auth', 'can:isAdmin'])->name('article.imageDestroy');
});

Route::controller(AuthAdvertiserController::class)->middleware('guest')->group(function () {
    Route::get('/advertiser/register', 'register')->name('advertiser.register');
    Route::post('/advertiser/register/post', 'postregister')->name('advertiser.postregister');
});

Route::controller(AdvertiserController::class)->middleware(['auth'])->group(function () {
    Route::get('/advertiser', 'index')->name('advertiser.index');
});

Route::controller(AdvertisementController::class)->middleware('auth')->group(function () {
    Route::get('/ad/create', 'create')->name('ad.create');
    Route::post('/ad/store', 'store')->name('ad.store');
    Route::get('/ad/view/{ad_id}', 'view')->name('ad.view');
    Route::get('/ad/edit/{ad_id}', 'edit')->name('ad.edit');
    Route::post('/ad/post/{ad_id}', 'update')->name('ad.update');
    Route::get('/ad/destroy/{ad_id}', 'destroy')->name('ad.destroy');
});
