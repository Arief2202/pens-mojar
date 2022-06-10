@extends('layouts.app-tim-pengusul')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('title', 'DAFTAR TIM | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Detail Tim Reviewer</h2>
        <h6>Daftar Tim / Detail Tim Reviewer</h6>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div>
                            <form>
                                    <div class="mb-3">
                                        <label class="form-label">Ketua Tim</label>
                                        <h4>Bayu Hidayah S.Kom M.Kom</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 1</label>
                                        <h4>Bayu Hidayah S.Kom M.Kom</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 2</label>
                                        <h4>Bayu Hidayah S.Kom M.Kom</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 3</label>
                                        <h4>Bayu Hidayah S.Kom M.Kom</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 4</label>
                                        <h4>Bayu Hidayah S.Kom M.Kom</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Tim</label>
                                        <h4>Brodin Stylelistic</h4>
                                    </div>
                            </form>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary mr-2">Kembali</button>
                                <a href="/edit-tim-reviewer"><button class="btn btn-primary">Edit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
