@extends('layouts.app')
@section('title', 'HOME | MOJAR APP')
@section('content')
<div class="container">
    @csrf
    <h2 class="tittle-utama">Home KAPRODI</h2>
    {{-- <h5 class="card-title tittle-login">Beranda</h5> --}}
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body px-5">
                <div class="row justify-content-around">

                    <div class="col-sm-6 col-lg-4 m-5">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/pengadaan-kaprodi">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">D3 Teknik Informatika</th>
                                </div>
                                </button>
                            </a>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">12</div>
                                    <div class="text-uppercase text-medium-emphasis small">praktikum</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">16</div>
                                    <div class="text-uppercase text-medium-emphasis small">teori</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">8</div>
                                    <div class="text-uppercase text-medium-emphasis small">interaktif</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 m-5">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/pengadaan-kaprodi">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">D4 Teknik Informatika</th>
                                </div>
                                </button>
                            </a>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">12</div>
                                    <div class="text-uppercase text-medium-emphasis small">praktikum</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">16</div>
                                    <div class="text-uppercase text-medium-emphasis small">teori</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">8</div>
                                    <div class="text-uppercase text-medium-emphasis small">interaktif</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 m-5">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/pengadaan-kaprodi">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">D4 Teknik Komputer</th>
                                </div>
                                </button>
                            </a>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">12</div>
                                    <div class="text-uppercase text-medium-emphasis small">praktikum</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">16</div>
                                    <div class="text-uppercase text-medium-emphasis small">teori</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">8</div>
                                    <div class="text-uppercase text-medium-emphasis small">interaktif</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 m-5">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/pengadaan-kaprodi">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">D4 Data Sains</th>
                                </div>
                                </button>
                            </a>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">12</div>
                                    <div class="text-uppercase text-medium-emphasis small">praktikum</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">16</div>
                                    <div class="text-uppercase text-medium-emphasis small">teori</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">8</div>
                                    <div class="text-uppercase text-medium-emphasis small">interaktif</div>
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
