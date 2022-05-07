@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Ajukan Pengadaan Modul</h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <form action="riwayat" method="POST"> 
                                @csrf
                                <div class="mb-3">
                                    <strong><label class="form-label">Mata Kuliah</label></strong>
                                    <select class="form-select" name="id_matkul" aria-label="Default select example">
                                        <option selected>Pilih Mata Kuliah</option>
                                        @foreach ($matkul as $item)
                                            <option value="{{ $item->id_matkul }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Jenis Modul</label></strong>
                                    <select class="form-select" name="id_modul" aria-label="Default select example">
                                        <option selected>Pilih Jenis Modul</option>
                                        @foreach ($modul as $item)
                                            <option value="{{ $item->id_modul }}">{{ $item->jenis_modul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Kuota Modul</label></strong>
                                    <input type="number" class="form-control" name="kuota">
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Ketua Tim Pengusul</label></strong>
                                    <select class="form-select" name="id_dosen" aria-label="Default select example">
                                        <option selected>Pilih Ketua Tim Untuk Pengajuan Modul Ini</option>
                                        @foreach ($dosen as $item)
                                            <option value="{{ $item->id_dosen }}">{{ $item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input id="btn-sa" class="btn btn-success btn-lg" type="submit" value="Submit">
                            </form>
                        </div>
                    @endsection
