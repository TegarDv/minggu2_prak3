<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function perkantoran(){
        return "Halaman sarana Perkantoran";
    }

    public function laboratorium(){
        return "Halaman sarana laboratorium";
    }

    public function kelas(){
        return "Halaman sarana kelas";
    }

    public function lainnya(){
        return "Halaman sarana lainnya";
    }
}
