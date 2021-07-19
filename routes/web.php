<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('students', StudentController::class);
    Route::resource('articles', ArticleController::class);
    Route::get('/table/student', [StudentController::class, 'dataTable'])->name('table.student');
    Route::get('/table/role', [RoleController::class, 'dataTable'])->name('table.role');
    Route::get('/table/user', [UserController::class, 'dataTable'])->name('table.user');
    Route::get('/table/article', [ArticleController::class, 'dataTable'])->name('table.article');

});

Route::post('/home/list', [HomeController::class, 'list'])->name('home.list');
Route::get('/home/getHotels', [HomeController::class, 'getHotels'])->name('home.getHotels');


