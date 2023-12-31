<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;

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

Route::namespace('Site')->group(function()
{
    Route::get('/', [HomeController::class, '__invoke']);

    Route::get('produtos', [CategoryController::class, 'index']);
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);
});