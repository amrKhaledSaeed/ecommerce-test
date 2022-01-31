<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(){
        return view('pages/addStudent');

    }

    public function storStudent(Request $request){
        $name=$request->name;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student=new Student();
        $student->name=$name;
        $student->profileImage= $imageName;
        $student->save();
        return back()->with('success_added', 'student recored has been inserted');
    }

    public function student(){
        $students=Student::all();
        return view('pages/allStudent',compact('students'));
    }

    public function editStudent($id){
        $student=Student::find($id);
        return view('pages/editStudent',compact('student'));

    }

    public function updateStudent(Request $request){
        $name=$request->name;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student=Student::find($request->id);
        $student->name=$name;
        $student->profileImage= $imageName;
        $student->save();
        return back()->with('success_update', 'student recored has been Updated');
    }

    public function deleteStudent($id){
        $student=Student::find($id);
        unlink(public_path('images').'/'.$student->profileImage);

        $student->delete();
        return back()->with('success_deleted','student has been deleted');
    }
}
