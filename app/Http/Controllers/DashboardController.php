<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $students = \App\Models\Student::all();

        foreach ($students as $student) {
            $categories[] = $student->name;
            $data[] = $student->getScores();
            $grades[] = $student->getGrades();
        }
        return view('dashboard', ['students' => $students, 'categories' => $categories, 'data' => $data, 'grades' => $grades]);
    }
}
