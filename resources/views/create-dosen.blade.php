@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Tambah Dosen</h1>
        <a href="/home"><h5 class="card-title tittle-login">Beranda</a> \ <a href="/super-admin-daftar-dosen">Daftar Dosen</a>  \ <u>Tambah Dosen</u> </h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <form action="super-admin-daftar-dosen" method="POST">
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
                                        <select class="form-select" name="id_matkul" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            @foreach ($matkul as $item)
                                            <option value="{{$item->id_matkul}}">{{$item->nama}}</option>
                                            @endforeach
                                          </select>
                                    </div>
                                    <br>
                                    <input id="btn-sa" class="btn btn-success btn-lg" type="submit" value="save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
