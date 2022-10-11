<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminArticlesController;
use App\Http\Controllers\AdminEditionController;
use App\Http\Controllers\AdminChaptersController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/papers', [PublicController::class, 'papers'])->name('papers');
Route::post('/papers', [PublicController::class, 'search_paper'])->name('search_paper');

Route::get('/editions', function () {
    return view('editions');
})->name('editions');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/articles', [AdminArticlesController::class, 'index'])->name('admin.articles');
    Route::get('/admin/article/details/{id}', [AdminArticlesController::class, 'details'])->name('admin.article.details');
    Route::get('/admin/article/edit/{id}', [AdminArticlesController::class, 'edit'])->name('admin.article.edit');
    
    Route::get('/admin/edition', [AdminEditionController::class, 'index'])->name('admin.edition');
    Route::get('/admin/edition/new', [AdminEditionController::class, 'new'])->name('admin.edition.new');
    Route::post('/admin/edition/add', [AdminEditionController::class, 'add'])->name('admin.edition.add');

    Route::get('/admin/chapters', [AdminChaptersController::class, 'index'])->name('admin.chapters');
    Route::post('/admin/chapters/add', [AdminChaptersController::class, 'add'])->name('admin.chapters.add');
    
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/user/details/{id}', [AdminController::class, 'details'])->name('admin.user.details');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/signout', [UserController::class, 'signout'])->name('user.signout');
});

Route::get('/signup', [PublicController::class, 'signup'])->name('user.signup');
Route::post('/adduser', [PublicController::class, 'adduser'])->name('user.add');

Route::get('/user/article/new', [ArticleController::class, 'new'])->name('user.article.new');
Route::post('/user/article/add', [ArticleController::class, 'add'])->name('user.article.add');
Route::get('/user/article/index', [ArticleController::class, 'index'])->name('user.articles');
