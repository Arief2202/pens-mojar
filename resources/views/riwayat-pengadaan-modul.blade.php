@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="tittle-utama">Riwayat Pengadaan Modul Ajar</h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                class="v-label v-label--active theme--light primary--text" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
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
                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
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
                        {{-- <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Jenjang
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">D3</a>
                                <a class="dropdown-item" href="#">D4</a>
                            </div>
                        </div> --}}
                        <br>
                        <br>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Mata Kuliah</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Jenis Modul</th>
                                        <th scope="col">Kuota</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataPengadaan as $item)
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
                                    @endforeach

                                    {{-- <tr>
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>Teori</td>
                                            <td>5</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-warning">Approved by UP2AI</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>1233456</td>
                                            <td>Matematika</td>
                                            <td>Teori</td>
                                            <td>5</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">Finish</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary" type="button">Detail</button></td>
                                        </tr> --}}
                                </tbody>
                            </table>
                            {{ $dataPengadaan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
