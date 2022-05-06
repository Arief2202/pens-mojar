@extends('layouts.app')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    {{-- <div class="container">
        <h1 class="tittle-utama">Tambah Akun</h1>
        <h5 class="card-title tittle-login">Beranda \ <a href="/super-admin-kelola-akun">Kelola Akun</a> \ Tambah Akun</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-group">Nama</label>
                                            <input type="date" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-group">Nama</label>
                                            <input type="date" class="form-control" name="nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Role</label>
                                    <select class="form-control form-select" id="inputGroupSelect01">
                                        <option selected> </option>
                                        <option value="1">Isi Rolenya</option>
                                        <option value="2">Isi Rolenya</option>
                                        <option value="3">Isi Rolenya</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div> --}}
                        <div class="container">
                            <h1 class="tittle-utama">Pengadaan Modul Ajar</h1>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="card text-white bg-dark mb-3">
                                                    <h5 class="card-header text-white">Surat Keterangan Penetapan Modul Ajar
                                                        PENS</h5>
                                                    <a class="btn btn-secondary" href="#" role="button">Upload</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card text-white bg-dark mb-3">
                                                    <h5 class="card-header text-white">Surat Keterangan Pencairan Dana Modul
                                                        Ajar PENS</h5>
                                                    <a class="btn btn-secondary" href="#" role="button">Upload</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card text-white bg-dark mb-3">
                                                    <h5 class="card-header text-white">Buku Paedoman Pembuatan Modul Ajar
                                                        PENS</h5>
                                                    <button class="btn btn-secondary" type="button">Upload</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endsection
