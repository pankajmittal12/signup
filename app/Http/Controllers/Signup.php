<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Rules\Password;
use App\Rules\Matching;

class Signup extends Controller
{
    function addUser(Request $request)
    {
        $request->validate([
            'Name' => 'required|min:3|max:50',
            'Email' => 'required|email',
            'Username' => 'required|min:5|max:10',
            'PNumber' => 'required|numeric|digits:10',
            'Course' => 'required',
            'Language' => 'required',
            'Password' => ['required', new Password()],
        ], [
            'Name.required' => 'Name is required.',
            'Name.min' => 'Name should have a minimum of 3 characters.',
            'Name.max' => 'Name should not exceed 50 characters.',
            'Email.required' => 'Email is required.',
            'Email.email' => 'Email must be a valid email address.',
            'Username.required' => 'Username is required.',
            'Username.min' => 'Username should have a minimum of 5 characters.',
            'Username.max' => 'Username should not exceed 10 characters.',
            'PNumber.required' => 'Phone number is required.',
            'PNumber.numeric' => 'Phone number must be numeric.',
            'PNumber.digits' => 'Phone number must be exactly 10 digits.',
            'Course.required' => 'Course is required.',
            'Language.required' => 'Language is required.',
            'Password.required' => 'Password is required.',
        ]);
        if (Register::where('Email', $request->Email)->exists()) {
            $request->session()->flash('message1', 'Email is already registered!');
            return redirect()->back();
        } elseif (Register::where('Username', $request->Username)->exists()) {
            $request->session()->flash('message2', 'Username is already taken!');
            return redirect()->back();
        } else {
            $register = new Register();
            $register->Name = $request->Name;
            $register->Email = $request->Email;
            $register->Username = $request->Username;
            $register->PhoneNumber = (string)$request->PNumber;
            $register->Course = $request->Course;
            $register->Gender = $request->Gender;
            $register->Language = json_encode(['Languages' => $request->Language]);
            $register->Password =  bcrypt($request->Password);
            $register->save();
            if ($register->save()) {
                $request->session()->flash('message', 'Registered Successfully!');
                return redirect('/login');
            } else {
                $request->session()->flash('message', 'Registration Failed!');
                return redirect('/Signin');
            }
        }
    }
}
