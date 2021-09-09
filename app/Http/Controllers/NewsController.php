<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id) {
        return "<h2>News Page</h2> <br> <b>Ini adalah sebuah halaman 
        berita</b> <br><br> Halaman Berita dengan Id <b>'$id'";
    }
}
