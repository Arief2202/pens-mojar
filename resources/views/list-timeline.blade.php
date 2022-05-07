@extends('layouts.app')
@section('title', 'TIMELINE | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Riwayat Pengadaan Modul Ajar</h1>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div>
                            <a href="/create-timeline"><button class="btn btn-primary" id="btn-sa">Tambah List Timeline</button></a>
                            <br>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">TanggalMulai</th>
                                        <th scope="col">TanggalSelesai</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataTimeline as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->tgl_awal }}</td>
                                            <td>{{ $item->tgl_akhir }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <form action="/list-timeline/{{ $item->id }}" method="POST"><button class="btn btn-danger" type="submit">
                                                <i class="bi bi-trash-fill"></i></button>
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            </td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
