<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\DB;

class Update extends Controller
{
    function update($id){
        $record = Register::where('Id', $id)->get();
        if ($record) {
            return view('update', compact('record'));
        } else {
            return redirect('/main')->with('message', 'Record not found!');
        }
    }
}
