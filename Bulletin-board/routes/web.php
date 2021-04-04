<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('bbs', [PostsController::class, 'index'])->name('index');
// Route::get('bbs/{id}', [PostsController::class, 'show'])->name('show');
Route::resource('bbs', PostsController::class)->only([
    'index', 'show', 'create', 'store',
]);
