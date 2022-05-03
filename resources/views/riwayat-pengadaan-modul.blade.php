@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="tittle-utama">Riwayat Pengadaan Modul Ajar</h1>
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
                          Jurusan
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
                                <td><button type="button" class="btn btn-success px-3"><i class="cil-check-circle" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-danger px-3"><i class="cil-x-circle" aria-hidden="true"></i></button>
                                </td>
                                <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><button type="button" class="btn btn-success px-3"><i class="cil-check-circle" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-danger px-3"><i class="cil-x-circle" aria-hidden="true"></i></button></td>
                                <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><button type="button" class="btn btn-success px-3"><i class="cil-check-circle" aria-hidden="true"></i></button>
                                    <button type="button" class="btn btn-danger px-3"><i class="cil-x-circle" aria-hidden="true"></i></button></td>
                                    <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                              </tr>
                            </tbody>
                          </table>
@endsection
