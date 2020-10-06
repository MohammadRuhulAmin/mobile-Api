<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function saveStudent(Request  $request){
        $student = new Student();
        $student->name = $request->name;
        $student->mobile = $request->mobile;
        if($student->save()){
            return "success!";
        }
    }
    public function viewRegisterPage(){
       $student = Student::all();
       return view('register',compact('student'));
    }
}
