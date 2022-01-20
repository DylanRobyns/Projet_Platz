<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;

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

// Route de Voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route Index
Route::get('/', [ResourcesController::class, 'index'])
     ->name('homepage');

// Route Resources
Route::get('/resources/{resource}/{slug}', [ResourcesController::class, 'show'])
     ->name('resources.show');

// Route More
Route::get('/more/resources', [ResourcesController::class, 'more'])
     ->name('more.resources');

// Route Resources(Categories)
Route::get('/categories/{category}/{slug}', [CategoriesController::class, 'show'])
     ->name('show.categories');

// Route Add
Route::get('/comments/add', [CommentsController::class ,'add']) 
     ->name('comments.add');