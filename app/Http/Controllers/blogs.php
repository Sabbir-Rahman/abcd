<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogs extends Controller
{
    function index(){
        return view('blog');
    }
}
