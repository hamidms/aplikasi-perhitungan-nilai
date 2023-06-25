@extends('layouts.master')

@section('content')
    
<div class="col">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Daftar Nilai Mahasiswa</h5>
            
          <!-- Button trigger modal -->
          <div class="float-end">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Launch demo modal
              </button>
          </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-floating">
                    <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap Mahasiswa">
                    <label for="inputName">Nama Mahasiswa</label>
                </form>
            </div>
            <div class="modal-body">
                <form class="form-floating">
                    <input type="text" class="form-control" id="inputNIM" placeholder="Nomor Induk Mahasiswa">
                    <label for="inputNIM">Nomor Induk Mahasiswa</label>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
          <!-- Table with stripped rows -->
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->getScores() }}</td>
                        <td>{{ $student->getGrades() }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

@stop