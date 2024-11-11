<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // This function for elequent model ; 
    public function getStudent(){
        $student = Student::all();
        return view("student",compact('student'));
        // return "test function";

    }
}
