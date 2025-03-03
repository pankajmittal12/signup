<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class ChangePasswordController extends Controller
{
    public function change(Request $request){

        $register = Register::where('Email', $request->Email)->first();
        if (!$register) {
            $request->session()->flash('error', 'User not found!');
            return redirect('/reset');
        }

        $register->password = bcrypt($request->Password);

        if ($register->save()) {
            $request->session()->flash('message', 'Password Changed Successfully!');
            return redirect('/login');
        } else {
            $request->session()->flash('message', 'Password Could Not Be Changed!');
            return redirect('/reset');
        }
    }
}
