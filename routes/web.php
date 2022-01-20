<?php

use Illuminate\Support\Facades\Route;

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

// Route Filter Ai
Route::get('/filter/ai/resources', [ResourcesController::class, 'filter_ai'])
     ->name('filter.ai.resources');

// Route Filter Psd
Route::get('/filter/psd/resources', [ResourcesController::class, 'filter_psd'])
     ->name('filter.psd.resources');

// Route Filter Font
Route::get('/filter/font/resources', [ResourcesController::class, 'filter_font'])
     ->name('filter.font.resources');

// Route Filter Theme
Route::get('/filter/theme/resources', [ResourcesController::class, 'filter_theme'])
     ->name('filter.theme.resources');

// Route Filter Photo
Route::get('/filter/photo/resources', [ResourcesController::class, 'filter_photo'])
     ->name('filter.photo.resources');

// Route Filter Premium
Route::get('/filter/premium/resources', [ResourcesController::class, 'filter_premium'])
     ->name('filter.premium.resources');

// Route Add
Route::get('/comments/add', [CommentsController::class ,'add']) 
     ->name('comments.add');
