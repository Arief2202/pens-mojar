@extends('layouts.app-kaprodi')
@section('title', 'DAFTAR TIM | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Daftar Tim D3 Teknik Informatika</h2>
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
                                        <th scope="col">No</th>
                                        <th scope="col">MATA KULIAH</th>
                                        <th scope="col">KETUA TIM</th>
                                        
                                        <th scope="col">STATUS</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Tim Pengusul MTK 1</td>
                                            <td>Bayu Hidayah S.Kom M.Kom</td>
                                            <td>
                                                <h5><span class="badge p-2 alert-success">RV204101</span></h5>
                                            </td>
                                            <td><button class="btn btn-outline-primary">Detail</button></a></td>
                                        </tr>
                                </tbody>
                            </table>
                           
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    @endsection
