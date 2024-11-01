<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getStudent(){
        $student = Student::all();
        return view("student",['data'=>$student]);
        // return "test function";

    }
}
