<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function greetings(){
        return "<h2>Home Page</h2> <br> <b>Selamat Datang</b> 
        <br> Di Halaman Utama Website Jurusan Teknologi Informasi";
    }
}
