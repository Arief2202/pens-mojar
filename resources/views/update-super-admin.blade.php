@extends('layouts.app')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Welcome Super Admin</h1>
        <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title tittle-login">Update Role Dosen Modul Ajar</h5>
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
                                <input type="text" class="form-control" aria-descril>
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