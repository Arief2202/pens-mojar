@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
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
                                <label for="exampleInputEmail1" class="form-label">NIDN</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="text" class="form-control" aria-descril>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <select class="form-control form-select" id="inputGroupSelect01">
                                    <option selected>  </option>
                                    <option value="1">Isi Rolenya</option>
                                    <option value="2">Isi Rolenya</option>
                                    <option value="3">Isi Rolenya</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection