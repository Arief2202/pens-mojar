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
        <th scope="col">N0</th>
        <th scope="col">NIDN</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>IT</td>
        <td><button class="btn btn-outline-primary" type="button">Update</button></td>
        <td><button class="btn btn-outline-danger" type="button">Delete</button></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>IT</td>
        <td><button class="btn btn-outline-primary" type="button">Update</button></td>
        <td><button class="btn btn-outline-danger" type="button">Delete</button></td>
    </tr>
    <tr>
    <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>IT</td>
        <td><button class="btn btn-outline-primary" type="button">Update</button></td>
        <td><button class="btn btn-outline-danger" type="button">Delete</button></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>IT</td>
        <td><button class="btn btn-outline-primary" type="button">Update</button></td>
        <td><button class="btn btn-outline-danger" type="button">Delete</button></td>
    </tr>
</tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection