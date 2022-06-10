@extends('layouts.app-tim-pengusul')
@section('title', 'DAFTAR TIM | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Daftar Tim D3 Teknik Informatika</h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <br>
                    <div class="container-fluid">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div class="col-sm-3">
                            <form class="d-flex">
                                <input class="form-control me-2 mr-2" type="search" placeholder="Cari" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Mata Kuliah</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Program Studi</th>
                                        <th scope="col">Ketua Tim Pengusul</th>
                                       
                                        
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 {{--   @foreach ($dataPengadaan as $item)
                                        <tr>
<<<<<<< HEAD
                                            <th scope="row">1</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
=======
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->matkul->kode_matkul }}</td>
                                            <td>{{ $item->matkul->nama }}</td>
                                            <td>{{ $item->modul->jenis_modul }}</td>
                                            <td>{{ $item->kuota }}</td>
>>>>>>> 6cf6b573a355939c53d168993075ea4cc4c2f046
                                            <td>
                                                <h5><span class="badge p-2 alert-danger">Unapproved</span></h5>
                                            </td>
                                            <td><a href="/detail-matkul"><button class="btn btn-outline-primary"
                                                type="button">Detail</button></td></a>
                                        </tr>
<<<<<<< HEAD
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
=======
                                    @endforeach  --}}

                                     <tr>
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>D3 Teknik Informatika</td>
                                            <td>Pak Dosen</td>
                                            
>>>>>>> 6cf6b573a355939c53d168993075ea4cc4c2f046
                                            <td>
                                                <h5><span class="badge p-2 alert-warning">Approved by UP2AI</span></h5>
                                            </td>
                                            <td><a href="/detail-reviewer"><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
<<<<<<< HEAD
                                            <th scope="row">5</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
=======
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>D3 Teknik Informatika</td>
                                            <td>Pak Dosen</td>
                                         
>>>>>>> 6cf6b573a355939c53d168993075ea4cc4c2f046
                                            <td>
                                                <h5><span class="badge p-2 alert-success">Finish</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="/tambah-tim-pengusul"><button class="btn btn-primary mr-2">Tambah Tim Pengusul</button></a>
                            </div>
                        </div>
                            <button class="btn btn-outline-primary">Tim Pengusul</button>
                            <a href="/daftar-tim-reviewer"><button class="btn btn-outline-primary">Tim Reviewer</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
