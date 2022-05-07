@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Upload Berkas Pengadaan Modul</h2>
        <br>
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card px-4">
                        <div class="mb-3">
                            <strong><label class="mt-4" for="formFile" class="form-label">Surat Keterangan Penetapan Modul Ajar</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <strong><label for="formFile" class="form-label">Surat Kontrak Pendanaan Modul</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <strong><label for="formFile" class="form-label">Buku Pedoman Pembuatan Modul Ajar</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <strong><label for="formFile" class="form-label">Upload PDF Timeline</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
