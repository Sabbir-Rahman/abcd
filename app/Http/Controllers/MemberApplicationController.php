<?php

namespace App\Http\Controllers;

use App\Models\member_application;
use Illuminate\Http\Request;


class MemberApplicationController extends Controller
{
    function add(Request $request){

        $member = new member_application();
        $member->student_id = $request->input('student_id');
        $member->name = $request->input('name');
        $member->email = $request->input('email');

        $query = $member->save();

        if($query)
            return redirect('/')->with('success','Data Saved');
        else
            return "Data not insert";

    }
}
