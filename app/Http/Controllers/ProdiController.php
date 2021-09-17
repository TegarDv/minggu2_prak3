<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function ti(){
        return "Halaman Prodi Teknik Informatika";
    }

    public function mi(){
        return "Halaman Prodi Manajemen Informatika";
    }
}
