<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($nama,$pesan){
        return view('comment', ['nama' => $name, 'pesan' => $pesan]);
    }
}
