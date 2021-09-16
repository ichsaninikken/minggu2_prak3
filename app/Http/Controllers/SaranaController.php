<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function office(){
        /* Praktikum minggu 2
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Perkantoran</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada perkantoran";
        */
        
        return view('sarana.office');
    }

    public function lab(){
        /* Praktikum minggu 2
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Laboratorium</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Laboratorium";
        */

        return view('sarana.lab');
    }

    public function class(){
        /* Praktikum minggu 2
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Kelas</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas yang ada pada Kelas";
        */

        return view('sarana.class');
    }

    public function ect(){
        /* Praktikum minggu 2
        return "<h2>Facilities Page</h2> <br> Ini adalah halaman <b>Sarana Lainnya</b>
        <br><br> Halaman ini menyajikan sarana atau fasilitas lainnya";
        */

        return view('sarana.ect');
    }
}
