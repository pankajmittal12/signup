<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Register;
use App\Mail\VerifyMail;

class Verfiy extends Controller
{
    function verify(Request $request){
        $user = Register::where('Email', $request->Email)->first();
        if($user)
        {
            Mail::to($request->Email)->send(new VerifyMail($request));
            $request->session()->flash('message','Verification email sent!');
            return redirect('/change');
        }
        else {
            $request->session()->flash('message', 'Email Not Found');
            return redirect('/login');
        }
    }
}
