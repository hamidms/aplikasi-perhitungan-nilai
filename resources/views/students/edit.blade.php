@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-8">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Data Mahasiswa</h5>
        
                <!-- Advanced Form Elements -->
                <form action="/student/{{ $student->id }}/update" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Data</label>
                        <div class="col-sm-9">
                            <div class="form-floating mb-3">
                                <input value="{{ $student->name }}" type="text" name="name" class="form-control" id="inputName" placeholder="Nama Lengkap Mahasiswa">
                                <label for="inputName">Nama Mahasiswa</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->nim }}" type="text" name="nim" class="form-control" id="inputNIM" placeholder="Nomor Induk Mahasiswa">
                                <label for="inputNIM">Nomor Induk Mahasiswa</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->quiz }}" type="text" name="quiz" class="form-control" id="inputQuiz" placeholder="Nilai Quiz">
                                <label for="inputQuiz">Nilai Quiz</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->assigment }}" type="text" name="assigment" class="form-control" id="inputAssigment" placeholder="Nilai Assigment">
                                <label for="inputAssigment">Nilai Assigment</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->attendance }}" type="text" name="attendance" class="form-control" id="inputAttendance" placeholder="Nilai Attendance">
                                <label for="inputAttendance">Nilai Attendance</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->practice }}" type="text" name="practice" class="form-control" id="inputPractice" placeholder="Nilai Practice">
                                <label for="inputPractice">Nilai Practice</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ $student->exam }}" type="text" name="exam" class="form-control" id="inputExam" placeholder="Nilai Exam">
                                <label for="inputExam">Nilai Exam</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
        
            </div>
        </div>
    </div>
    <div class="col-8">
        
    </div>
</div>
@stop