@extends('layouts.app-tim-pengusul')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('title', 'DAFTAR TIM | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Buat Tim Reviewer</h2>
        <h6>Daftar Tim / Buat Tim Reviewer</h6>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div>
                            <form>
                                    <div class="mb-3">
                                        <label class="form-label">Ketua Tim</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Ketua Tim</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 1</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Anggota Tim</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 2</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Anggota Tim</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 3</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Anggota Tim</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Anggota Tim 4</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Anggota Tim</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Tim</label>
                                        <input type="text" class="form-control" name="nama-tim">
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-primary mr-2">Batal</button>
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
