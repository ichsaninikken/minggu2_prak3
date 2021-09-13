<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function office(){
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Perkantoran</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada perkantoran";
    }

    public function lab(){
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Laboratorium</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Laboratorium";
    }

    public function class(){
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Kelas</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Kelas";
    }

    public function ect(){
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Lainnya</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas lainnya";
    }
}
