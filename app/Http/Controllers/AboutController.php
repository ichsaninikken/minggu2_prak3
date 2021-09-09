<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function identitas(){
        return "<h2>Abaut Us</h2> <br> <b>Teknologi Informasi</b> <br><br>Jurusan information technology atau IT 
        adalah jurusan dimana Kamu akan mempelajari cara untuk merancang, <br> mengimplementasi, 
        melakukan konfigurasi, serta serta merawat berbagai infrastruktur yang berkaitan 
        dengan komputer dan teknologi informasi.";
    }
}
