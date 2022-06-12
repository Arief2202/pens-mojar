@extends('layouts.app-tim-reviewer')
@section('title', 'DETAIL MATA KULIAH | MOJAR APP')
@section('content')
<div class="container">
    <h1 class="tittle-utama">Catatan Revisi</h1>
    {{-- <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5> --}}
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body px-3">
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="card-body">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                                            <div class="card-body">
                                                <div class="mb-3">
                                            <td><th><button type="button" class="btn btn-outline-danger">Batal</button></th>
                                            <th><button type="button" class="btn btn-outline-warning">Edit</button></th>
                                            <th><button type="button" class="btn btn-outline-success">Simpan</button></th> </td>
                                          </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection