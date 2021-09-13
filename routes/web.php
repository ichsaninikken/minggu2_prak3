<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [HomeController::class, 'greetings']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [ProdiController::class, 'mi']);
    Route::get('/teknik-informatika', [ProdiController::class, 'ti']);
});

Route::get('news/{id}', [NewsController::class, 'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [SaranaController::class, 'office']);
    Route::get('/laboratorium', [SaranaController::class, 'lab']);
    Route::get('/kelas', [SaranaController::class, 'class']);
    Route::get('/lainnya', [SaranaController::class, 'ect']);
});

Route::get('/abaut', [AboutController::class, 'identitas']);

Route::get('/comment/{nama}/{pesan}', [CommentController::class, 'comment']);