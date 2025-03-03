<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class Edit extends Controller
{
    function save(Request $request, $id){
        $register = Register::find($id);
        if($register)
        {
            $register->Name = $request->Name;
            $register->Email = $request->Email;
            $register->Username = $request->Username;
            $register->PhoneNumber = (string)$request->PNumber;
            $register->Course = $request->Course;
            $register->Gender = $request->Gender;
            $register->Language = json_encode(['Languages' => $request->Language]);
            $register->save();
            if ($register->save()) {
                $request->session()->flash('message', 'Update Successfully!');
                return redirect('/login');
            } else {
                $request->session()->flash('message', 'Update Failed!');
                return redirect('/update');
            }
        } else {
            return redirect('/main')->with('message', 'Record not found!');
        }
    }
}
