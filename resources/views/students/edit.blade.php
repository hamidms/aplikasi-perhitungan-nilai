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
    <div class="col-4">
        <div class="card">
           <div class="card-body">
              <h5 class="card-title">Radar Chart</h5>
              <div id="radaroke">
              </div>
              <!-- Radar Chart -->
              <div id="radarChart" style="min-height: 365px;">
                 <div id="apexchartsk9ru1e1r" class="apexcharts-canvas apexchartsk9ru1e1r apexcharts-theme-light" >
                    
                    <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                       <div class="apexcharts-menu-icon" title="Menu">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                             <path fill="none" d="M0 0h24v24H0V0z"></path>
                             <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                          </svg>
                       </div>
                       <div class="apexcharts-menu">
                          <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                          <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                          <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                       </div>
                    </div>
                 </div>
              </div>
              <script>
                 document.addEventListener("DOMContentLoaded", () => {
                   new ApexCharts(document.querySelector("#radarChart"), {
                     series: [{
                       name: 'Nilai',
                       data: [
                           {{$student->quiz}},
                           {{$student->assigment}},
                           {{$student->attendance}},
                           {{$student->practice}},
                           {{$student->exam}}
                       ],
                     }],
                     chart: {
                       height: 350,
                       type: 'radar',
                     },
                     xaxis: {
                       categories: ['Quiz', 'Assigment', 'Attendance', 'Practice', 'Exam']
                     }
                   }).render();
                 });
              </script>
              <!-- End Radar Chart -->
           </div>
        </div>
     </div>
</div>
@stop