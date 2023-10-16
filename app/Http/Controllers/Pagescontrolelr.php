<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontrolelr extends Controller
{
    public function index(){
        return view('index');
    }
}
