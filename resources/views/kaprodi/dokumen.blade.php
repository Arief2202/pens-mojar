@extends('layouts.app-kaprodi')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'BERKAS PENGADAAN | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Dokumen Pengadaan Modul</h2>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                <tr id="garis">
                                    <th scope="row" class="tittle-th">Surat Keterangan Penetapan Modul Ajar</th>
                                    <td><a href=""><button class="btn btn-primary">Lihat</button></a></td>
                                </tr>
                                <tr id="garis">
                                    <th scope="row" class="tittle-th">Surat Kontrak Pendanaan Modul</th>
                                    <td><a href=""><button class="btn btn-primary">Lihat</button></a></td>
                                </tr>
                                <tr id="garis">
                                    <th scope="row" class="tittle-th">Buku Pedoman Pembuatan Modul Ajar</th>
                                    <td><a href=""><button class="btn btn-primary">Lihat</button></a></td>
                                </tr>
                                <tr id="garis">
                                    <th scope="row" class="tittle-th">PDF Timeline</th>
                                    <td><a href=""><button class="btn btn-primary">Lihat</button></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
