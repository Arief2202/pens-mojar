@extends('layouts.app-super-admin')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
<<<<<<< HEAD:resources/views/superadmin/super-admin-kelola-akun.blade.php
        <h1 class="tittle-utama">Daftar Dosen</h1>
        <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5>
=======
        <h1 class="tittle-utama">Kelola Akun</h1>
        <h5 class="card-title tittle-login"><a href="/home">Beranda</a> \ <u>Kelola Akun</u></h5>
>>>>>>> 057175df7f93a70c2582230b23a65f9c1345c70d:resources/views/super-admin/super-admin-kelola-akun.blade.php
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body px-5">
                        <br>
                        <div>
<<<<<<< HEAD:resources/views/superadmin/super-admin-kelola-akun.blade.php
                            <a href="/super-admin-create-dosen"><button class="btn btn-lg btn-primary" id="btn-sa">Tambah
                                    Dosen</button></a>
=======
                            <a href="/super-admin-create"><button class="btn btn-primary">Tambah Akun</button></a>
>>>>>>> 057175df7f93a70c2582230b23a65f9c1345c70d:resources/views/super-admin/super-admin-kelola-akun.blade.php
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
                                    @foreach ($data as $key => $akun)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $akun->nidn }}</td>
                                            <td>{{ $akun->name }}</td>
                                            <td>{{ $akun->email }}</td>
                                            <td>{{ $akun->role->nama_role }}</td>
                                            <td>
                                                <form>
                                                    <a href="/{{ $akun->id }}/edit"><button class="btn btn-primary"
                                                            type="submit"><i class="bi bi-pen-fill"></i></button></a>
                                                    <form action="/super-admin-kelola-akun/{{ $akun->id }}"
                                                        method="POST"><button class="btn btn-danger" type="submit">
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
                        {{-- {{ $dataDosen->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
