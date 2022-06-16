@extends('layouts.app-kaprodi')
@section('title', 'LIST PENDANAAN | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Beranda Kaprodi</h2>
        <h6>Beranda / List Pengadaan</h6>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <br>
                    <div class="container-fluid">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div class="col-sm-3">
                            <form class="d-flex">
                                <input class="form-control me-2 mr-2" type="search" placeholder="Cari" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NO.KODE</th>
                                        <th scope="col">MATA KULIAH</th>
                                        <th scope="col">SEMESTER</th>
                                        <th scope="col">TAHUN PENDANAAN</th>
                                        <th scope="col">TIPE PENDANAAN</th>

                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>RV204101</td>
                                            <td>Matematika 1</td>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Modul
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Video
                                                    </label>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>RV204101</td>
                                            <td>Matematika 1</td>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Modul
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Video
                                                    </label>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>RV204101</td>
                                            <td>Matematika 1</td>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Modul
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Video
                                                    </label>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>RV204101</td>
                                            <td>Matematika 1</td>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Modul
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Video
                                                    </label>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>RV204101</td>
                                            <td>Matematika 1</td>
                                            <td>1</td>
                                            <td>2020</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mr-5" for="flexRadioDefault1">
                                                        Modul
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Video
                                                    </label>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                            <button class="btn btn-outline-primary">Ajukan Pengadaan</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
