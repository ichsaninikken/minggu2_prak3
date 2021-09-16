<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    
    public function mi(){
        /* Praktikum minggu 2
        return "<h2>Study Program Page</h2> <br> <b>Manajemen Informatika</b> <br> 
        Manajemen Informatika adalah sebuah jurusan kuliah di perguruan tinggi yang
        mengajarkan mahasiswanya tentang penggunaan teknologi untuk <br> 
        memudahkan kegiatan bisnis. Mahasiswa Jurusan Manajemen Informatika belajar tentang cara
        menganalisis, merancang, mengembangkan, <br> hingga mengelola teknologi informasi.";
        */

        return view('prodi.mi');
    }

    public function ti(){
        /* Praktikum minggu 2
        return "<h2>Study Program Page</h2> <br> <b>Teknik Informatika</b> <br> 
        Teknik Informatika adalah jurusan yang fokus pembelajarannya seputar programming <br>
        (penguasaan bahasa pemrograman), pengembangan software, dan teknologi jaringan komputer.";
        */

        return view('prodi.ti');
    }    
}
