<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{

    // Delete Record Function
    public function deleteRecordFunc(Record $record){
        $record->delete();
        return redirect('/')->with('success','Record Succesfully Deleted');
    }

    // Show Delete Page
    public function showDeletePage(Record $record){
        return view('delete-record',['record' => $record]);
    }

    // Update Record Function
    public function updateRecordFunc(Request $request,Record $record){
        $incommingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'job' => 'required',
            'age' => 'required'
        ]);
        $record->update($incommingFields);
        return 'Updated Successfully';
    }

    // Show Update Record Page
    public function showUpdateRecord(Record $record){
        return view('update-record',['record'=>$record]);
    }

    // Create Single View Record
    public function singleViewFunc(Record $record){
        return view('single-record',['record' => $record]);
    }

    // Create Record Function
    public function createRecordFunc(Request $request){
        $incommingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:records',
            'address' => 'required',
            'job' => 'required',
            'age' => 'required'
        ]);
        Record::create($incommingFields);
        return redirect('/records')->with('success','Record Created Successfully');
    }
}
