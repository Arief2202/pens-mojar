@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Daftar Dosen</h1>
        <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body px-5">
                        <br>
                        <div>
                            <a href="/super-admin-create-dosen"><button class="btn btn-lg btn-primary" id="btn-sa">Tambah Dosen</button></a>
                        </div>
                        <br>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIDN</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataDosen as $dosen)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $dosen->nidn }}</td>
                                            <td>{{ $dosen->nama }}</td>
                                            <td>{{ $dosen->matkul->nama }}</td>
                                            <td>{{ $dosen->prodi->nama }}</td>
                                            <td>
                                                <form>
                                                    <a href="/{{ $dosen->id }}/edit"><button class="btn btn-primary"
                                                            type="submit"><i class="bi bi-pen-fill"></i></button></a>
                                                    <form action="/super-admin-daftar-dosen/{{ $dosen->id }}" method="POST"><button class="btn btn-danger" type="submit">
                                                        <i class="bi bi-trash-fill"></i></button>
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $dataDosen->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
