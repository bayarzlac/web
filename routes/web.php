<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminArticlesController;
use App\Http\Controllers\EditionController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
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
    return view('index');
})->name('index');

Route::get('/articles', function () {
    return view('/articles');
})->name('articles');

Route::get('/editions', function () {
    return view('editions');
})->name('editions');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/articles', [AdminArticlesController::class, 'index'])->name('admin.articles');

Route::get('/admin/edition', [EditionController::class, 'index'])->name('admin.edition');
Route::get('/admin/edition/new', [EditionController::class, 'new'])->name('admin.edition.new');
Route::post('/admin/edition/add', [EditionController::class, 'add'])->name('admin.edition.add');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('/user/add', [UserController::class, 'add'])->name('user.add');

Route::get('/user/article/new', [ArticleController::class, 'new'])->name('user.article.new');
Route::post('/user/article/add', [ArticleController::class, 'add'])->name('user.article.add');