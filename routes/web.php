<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminArticlesController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/articles', [AdminArticlesController::class, 'index'])->name('admin.articles');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('/user/add', [UserController::class, 'add'])->name('user.add');

Route::get('/user/article/new', [ArticleController::class, 'new'])->name('user.article.new');
Route::post('/user/article/send', [ArticleController::class, 'send'])->name('user.article.send');