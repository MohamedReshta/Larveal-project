<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Studentmodel;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function Showlist()
    {

        $allstudents =  Studentmodel::all();
        return view('liststudent')->with('all', $allstudents);
    }
    public function addstudent()
    {

        return view('addstudent');
    }
    public function storestudent(Request $request)
    {

        $student = new Studentmodel();
        $student->Name = $request->Name;
        $student->Age = $request->Age;
        $student->Address = $request->Address;
        $student->Email = $request->Email;
        $student->save();


        return redirect()->back();
    }
    public function deletestudent($id)
    {

        Studentmodel::find($id)->delete();

        return redirect()->back();
    }

    public function updatestudent($id)
    {
        $student = Studentmodel::where('id','=',$id)->first();

        return view('Updatestudent')->with('data', $student);
    }
    public function editstudent(Request $request, $id)
    {
        Studentmodel::where( 'id' , '=' , $id )->update([
            'Name'=>$request->Name,
            'age'=>$request->age,
            'address'=>$request->address,
            'Email'=>$request->Email

        ]);
        return redirect()-> route ('student.list');
        }
}
