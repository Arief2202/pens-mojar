@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Edit Data Dosen</h1>
        <h5 class="card-title tittle-login">Beranda \ Tambah Akun</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <form action="/{{$dataDosen->id_dosen}}" method="PUT">
                                @method('PUT')
                                @csrf
                                <div class=".container">
                                    <div class="mb-3">
                                        <label class="form-label">NIDN</label>
                                        <input type="text" class="form-control" name="nidn">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Program Studi</label><br>
                                        <select class="form-select" name="id_prodi" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            @foreach ($prodi as $item)
                                            <option value="{{$item->id_prodi}}">{{$item->nama}}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mata Kuliah</label>
                                        <input type="text" class="form-control" name="id_matkul" placeholder="Kalau ini isi angka biasa, belum tak relasikan">
                                    </div>
                                    <br>
                                    <input class="btn btn-success btn-lg" type="submit" value="save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
