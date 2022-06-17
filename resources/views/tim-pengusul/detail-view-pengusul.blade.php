@extends('layouts.app')
@section('title', 'DETAIL MATA KULIAH | MOJAR APP')
@section('content')
<div class="container">
    <h1 class="tittle-utama">Detail Pengadaan Modul</h1>
    {{-- <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5> --}}
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body px-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="border: none;">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Mata Kuliah</th>
                                            <td id="tittle-td">: Workshop Kecerdasan Buatan (AI)</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">No. Kode</th>
                                            <td id="tittle-td">: AI007</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Semester</th>
                                            <td id="tittle-td">: 4</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Tahun Pendanaan</th>
                                            <td id="tittle-td">: 2022</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Jenis Pendanaan</th>
                                            <td id="tittle-td">: Modul Pratikum</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Ketua Tim Pembuat</th>
                                            <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom.</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th" id="text-color-detail">Anggota Tim Pembuat</th>
                                            <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom. <br>
                                                : Tri Hadiah Muliawati, S.ST., M.Kom. <br> : Tri Hadiah Muliawati, S.ST., M.Kom.</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="vl"></div>
                        <div class="col-sm-6">
                            <div class="card" style="border: none;">
                                <div class="card-body" id="line-card">
                                    <table class="table">
                                    </table>
                                    <table class="table">
                                        <tbody>
                                            <tr id="garis">
                                                <th scope="row" class="tittle-th" id="text-color-detail">Tim Reviewer</th>
                                                <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom. <br>
                                                    : Tri Hadiah Muliawati, S.ST., M.Kom. <br> : Tri Hadiah Muliawati, S.ST., M.Kom.</td>
                                            </tr>
                                            <tr id="garis">
                                                <th scope="row" class="tittle-th">Proposal</th>
                                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                            </tr>
                                            <tr id="garis">
                                                <th scope="row" class="tittle-th">Modul Ajar</th>
                                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                            </tr>
                                           
                                                  </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection