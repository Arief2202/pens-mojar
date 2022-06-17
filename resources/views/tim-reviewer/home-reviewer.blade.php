@extends('layouts.app')
@section('title', 'RIWAYAT PENGADAAN MODUL | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Riwayat Pengadaan Modul Ajar </h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
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
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->matkul->kode_matkul }}</td>
                                            <td>{{ $item->matkul->nama }}</td>
                                            <td>{{ $item->modul->jenis_modul }}</td>
                                            <td>{{ $item->kuota }}</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-danger">Unapproved</span></h5>
                                            </td>
                                            <td><a href="/detail-matkul"><button class="btn btn-outline-primary"
                                                type="button">Detail</button></td></a>
                                        </tr>
                                    @endforeach  --}}

                                     <tr>
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>D3 Teknik Informatika</td>
                                            <td>Pak Dosen</td>
                                            
                                            <td>
                                                <h5><span class="badge p-2 alert-warning">Approved by UP2AI</span></h5>
                                            </td>
                                            <td><a href="/detail-reviewer"><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>D3 Teknik Informatika</td>
                                            <td>Pak Dosen</td>
                                         
                                            <td>
                                                <h5><span class="badge p-2 alert-success">Finish</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                                        </tr>
                                </tbody>
                            </table>
                         {{--  {{ $dataPengadaan->links() }}  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
