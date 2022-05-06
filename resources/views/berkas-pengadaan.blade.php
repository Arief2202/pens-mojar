@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
    <div class="container">
        <h3 class="tittle-utama">Pengadaan Modul Ajar</h3>
        <br>
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card px-4">
                        <div class="mb-3">
                            <strong><label class="mt-4" for="formFile" class="form-label">Surat Keterangan Penetapan Modul Ajar</label></strong>
                            <input class="form-control" type="file" id="formFile">
                            <embed type="application/pdf" src="images/kalender_akademik_20_21.pdf" width="100%" height="400"></embed>        
                        </div>
                        <div class="mb-3">
                            <strong><label for="formFile" class="form-label">Surat Kontrak Pendanaan Modul</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <strong><label for="formFile" class="form-label">Buku Pedoman Pembuatan Modul Ajar</label></strong>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        {{-- preview pdf --}}
                        <div>
                            <br>
                            <p> Bikin tampilan Preview PDF disini coba </p>

                            <p>source pdfnya pake ini ->  images/kalender_akademik_20_21.pdf</p>
                        </div>
                        
                        {{-- <div class="row">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
