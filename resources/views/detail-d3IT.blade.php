@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="tittle-utama">Detail Pendanaan D3 Teknik Informatika</h1>
    <h5 class="card-title tittle-login">Beranda / Detail Pendanaan</h5>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="container-fluid">
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Tahun Pengadaan</option>
                    <option value="1">2019</option>
                    <option value="2">2020</option>
                    <option value="3">2021</option>
                    <option value="3">2022</option>
                  </select>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Jenjang</option>
                        <option value="1">D3</option>
                        <option value="2">D4</option>
                      </select>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="1">Semester 4</option>
                        <option value="2">Semester 5</option>
                        <option value="3">Semester 6</option>
                        <option value="1">Semester 7</option>
                        <option value="1">Semester 8</option>
                      </select>
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
                                <td><a class="btn btn-outline-primary" href="/detail-Matkul" role="button">Detail</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><h4><span class="badge bg-success">Finish</span></h4></td>
                                <td><a class="btn btn-outline-primary" href="/detail-Matkul" role="button">Detail</a></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>1233456</td>
                                <td>Matematika</td>
                                <td>Teori</td>
                                <td><h4><span class="badge bg-danger">Unapproved</span></h4></td>
                                <td><a class="btn btn-outline-primary" href="/detail-Matkul" role="button">Detail</a></td>
                              </tr>
                            </tbody>
                          </table>
@endsection
