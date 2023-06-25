<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = \App\Models\Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create(Request $request) {
        \App\Models\Student::create($request->all());

        return redirect('/')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id) {
        $student = \App\Models\Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        $student = \App\Models\Student::find($id);
        $student->update($request->all());

        return redirect('/')->with('sukses', 'Data berhasil diinput');
    }

    public function delete($id) {
        $student = \App\Models\Student::find($id);
        $student->delete($student);
        return redirect('/')->with('sukses', 'Data berhasil dihapus');
    }
}
