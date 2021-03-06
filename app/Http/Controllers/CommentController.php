<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama,$pesan) {
        /* Praktikum minggu 2
        return "<h2>Comment</h2> <br> 
        <b>Halaman ini menampilkan sebuah pesan</b><br><br>
        Nama    : $nama <br> Pesan yang ingin di sampaikan    : $pesan";
        */

        return view('comment', ['nama' => $nama], ['pesan' => $pesan]);
    }
}
