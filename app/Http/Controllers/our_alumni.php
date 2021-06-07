<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class our_alumni extends Controller
{
    //
    function index(){
        return view('our_alumni');
    }

    function goSecondPage(){
        return view('our_alumni_second_page');
    }
}
