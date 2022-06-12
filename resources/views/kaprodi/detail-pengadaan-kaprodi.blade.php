@extends('layouts.app')
@section('title', 'DETAIL MATA KULIAH | MOJAR APP')
@section('content')
<div class="container">
    <h1 class="tittle-utama">Detail Pengadaan (D3 Teknik Informatika)</h1>
    {{-- <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5> --}}
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body px-5">
                    <br>
                    <div>
                        <H3>Detail Mata Kuliah</H3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card" style="border: none;">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                        <br>
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
                                            <th scope="row" class="tittle-th">Tim Reviewer</th>
                                            <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom.</td>
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
                                        <tbody>
                                        <br>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th" id="text-color-detail">Ketua Tim Pembuat</th>
                                            <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom.</td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th" id="text-color-detail">Anggota Tim Pembuat</th>
                                            <td id="tittle-td">: Belum di Tentukan</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table class="table">
                                        <tbody>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Proposal</th>
                                            <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">Hasil Pengerjaan</th>
                                            <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">RPS</th>
                                            <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                        </tr>
                                        <tr id="garis">
                                            <th scope="row" class="tittle-th">SAP</th>
                                            <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-outline-primary mr-2">Kembali</button>
                                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop">
                                        Approved
                                        </button>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="staticBackdropLabel">PERHATIAN !!!</h2>
                                        </div>
                                        <div class="modal-body">
                                         <h6>Apakah anda yakin ingin melakukan Approve Pengadaan ?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            

                                            <form action="/approval-kaprodi">
                                                <button  type="submit" class="btn btn-success">Approved</button>
                                            </form>
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
    </div>
</div>
@endsection