@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'PENGADAAN MODUL | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Ajukan Pendanaan Modul</h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        
                            <form action="riwayat" method="POST"> 
                                @csrf
                                <div class="mb-3">
                                    <strong><label class="form-label">Mata Kuliah</label></strong>
                                    <select class="form-select" name="id_matkul" aria-label="Default select example">
                                        <option selected>Pilih Mata Kuliah</option>
                                    {{--    @foreach ($matkul as $item)
                                            <option value="{{ $item->id_matkul }}">{{ $item->nama }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Jenis Modul</label></strong>
                                    <select class="form-select" name="id_modul" aria-label="Default select example">
                                        <option selected>Pilih Jenis Modul</option>
                                     {{--   @foreach ($modul as $item)
                                            <option value="{{ $item->id_modul }}">{{ $item->jenis_modul}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label" for="exampleFormControlInput1">Ketua Tim Pengusul</label></strong>
                                    <input class="form-control" id="exampleFormControlInput1" aria-label="Default select example" placeholder="Masukkan Nama Ketua Tim Pengusul">
                                  </div>
                                  <div class="mb-3">
                                    <strong><label class="form-label" for="exampleFormControlTextarea1">Anggota Tim Pengusul</label></strong>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" aria-label="Default select example" rows="3"></textarea>
                                  </div>
                                  <div class="mb-3">
                                    <strong><label class="form-label" aria-label="Default select example" for="formFile">Upload Proposal Pendanaan</label></strong>
                                    <input class="form-control" id="formFile" type="file">
                                  </div>
                                <input id="btn-sa" class="btn btn-success btn-lg" type="submit" value="Submit">
                            </form>
                        </div>
                    @endsection
