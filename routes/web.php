<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Blog\CreateBlogController;
use App\Http\Controllers\Blog\ShowMyBlogsController;
use App\Http\Controllers\Blog\EditBlogController;
use App\Http\Controllers\Blog\DeleteBlogController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowBlogController;

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

Route::get('/', [ShowBlogController::class, 'index']);

Route::get('/login', [LoginController::class, 'getLogin']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', [LogoutController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/add-blog', [CreateBlogController::class, 'getCreate']);
    Route::post('/add-blog', [CreateBlogController::class, 'postCreate']);

    Route::get('/my-blogs', [ShowMyBlogsController::class, 'myBlogs']);

    Route::get('/edit-blog/{blogId}', [EditBlogController::class, 'getEdit']);
    Route::put('/update-blog/{blogId}', [EditBlogController::class, 'postEdit']);

    Route::post('/delete-blog/{blogId}', [DeleteBlogController::class, 'deleteBlog']);
});
