<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class Delete extends Controller
{
    function delete($id)
    {
        // $record = Register::find($id);
        // echo $record->Name;
        $isDelete = Register::destroy($id);
        if ($isDelete) {
            return redirect('main');
        }
    }
}
