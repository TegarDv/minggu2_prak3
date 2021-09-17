<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function NewsClass($id){
        return view('news', ['id' => $id]);
    }
}
