<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    function display(){
        $register = DB::table('registers')->get();
        return view('/main',compact('register'));
    }
}
