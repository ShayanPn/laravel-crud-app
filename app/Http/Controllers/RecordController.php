<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function createRecordFunc(Request $request){
        $incommingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:records',
            'address' => 'required',
            'job' => 'required',
            'age' => 'required'
        ]);
        Record::create($incommingFields);
        return 'Record Created Successfully';
    }
}
