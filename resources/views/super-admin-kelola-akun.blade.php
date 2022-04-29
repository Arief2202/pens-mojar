@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Kelola Akun</h1>
        <h5 class="card-title tittle-login">Beranda \ Kelola Akun</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <a href="/super-admin-create"><button class="btn btn-primary">Tambah Dosen</button></a>
                        </div>
                        <br>
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIDN</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $akun)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{ $akun->id }}</td>
                                            <td>{{ $akun->name }}</td>
                                            <td>{{ $akun->email }}</td>
                                            <td>{{ $akun->role->nama_role }}</td>
                                            <td><button class="btn btn-outline-primary" type="button">Update</button>
                                                <button class="btn btn-outline-danger" type="button">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
