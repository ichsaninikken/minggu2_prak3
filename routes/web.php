<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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
    Route::get('/manajemen-informatika', function () {
        return "<h2>Study Program Page</h2> <br> <b>Manajemen Informatika</b> <br> 
        Manajemen Informatika adalah sebuah jurusan kuliah di perguruan tinggi yang
        mengajarkan mahasiswanya tentang penggunaan teknologi untuk <br> 
        memudahkan kegiatan bisnis. Mahasiswa Jurusan Manajemen Informatika belajar tentang cara
        menganalisis, merancang, mengembangkan, <br> hingga mengelola teknologi informasi.";
    });
    Route::get('/teknik-informatika', function () {
        return "<h2>Study Program Page</h2> <br> <b>Teknik Informatika</b> <br> 
        Teknik Informatika adalah jurusan yang fokus pembelajarannya seputar programming <br>
        (penguasaan bahasa pemrograman), pengembangan software, dan teknologi jaringan komputer.";
    });
});

Route::get('news/{id}', [NewsController::class, 'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', function () {
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Perkantoran</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada perkantoran";
    });
    Route::get('/laboratorium', function () {
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Laboratorium</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Laboratorium";
    });
    Route::get('/kelas', function () {
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Kelas</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Kelas";
    });
    Route::get('/lainnya', function () {
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Lainnya</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas lainnya";
    });
});

Route::get('/abaut', [AboutController::class, 'identitas']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class, 'comment']);