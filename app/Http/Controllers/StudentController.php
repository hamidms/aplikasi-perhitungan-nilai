<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = \App\Models\Student::all();
        return view('students.index', ['students' => $students]);
    }
}