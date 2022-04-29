@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Tambah Dosen</h1>
        <h5 class="card-title tittle-login">Beranda \ Tambah Akun</h5>
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
                                        <label class="form-label">Program Studi</label>
                                        <input type="text" class="form-control" name="id_prodi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mata Kuliah</label>
                                        <input type="text" class="form-control" name="id_matkul">
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
