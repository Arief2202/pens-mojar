@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="tittle-utama">Detail Pendanaan D3 Teknik Informatika</h1>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="container-fluid">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle"class="v-label v-label--active theme--light primary--text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tahun Pengadaan
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">2019</a>
                          <a class="dropdown-item" href="#">2020</a>
                          <a class="dropdown-item" href="#">2021</a>
                          <a class="dropdown-item" href="#">2022</a>
                        </div>
                      </div> 
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Semester
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Semester 1</a>
                          <a class="dropdown-item" href="#">Semester 2</a>
                          <a class="dropdown-item" href="#">Semester 3</a>
                          <a class="dropdown-item" href="#">Semester 4</a>
                          <a class="dropdown-item" href="#">Semester 5</a>
                          <a class="dropdown-item" href="#">Semester 6</a>
                          <a class="dropdown-item" href="#">Semester 7</a>
                          <a class="dropdown-item" href="#">Semester 8</a>
                        </div>
                      </div> 
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Jenjang
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">D3</a>
                          <a class="dropdown-item" href="#">D4</a>
                        </div>
                      </div> 
                      <br>
                      <br>
                      <br>
                      <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Tipe Pendanaan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><h4><span class="badge bg-warning">Approved by UP2AI</span></h4></td>
                                <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><h4><span class="badge bg-success">Finish</span></h4></td>
                                <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><h4><span class="badge bg-danger">Unapproved</span></h4></td>
                                <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                            </tbody>
                          </table>
@endsection
