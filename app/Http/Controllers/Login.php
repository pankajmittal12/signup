<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    function login(Request $request){
        $user = Register::where('Email', $request->Email)->first();
        if($user && Hash::check($request->Password, $user->Password))
        {
            return redirect('/main');
        }
        else {
            $request->session()->flash('message', 'Record Not Found');
            return redirect('/login');
        }
    }
}
