@extends('layouts.app')
@section('title', 'SUPER ADMIN | MOJAR APP')
@section('content')
<div class="container">
    @csrf
    <h1 class="tittle-utama">Dashboard UP2AI</h1>
    <h5 class="card-title tittle-login">Beranda</h5>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body px-5">
                    <div class="card-columns">
                        <div class="card mb-4 " style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">Teknik Informatika</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">Teknik Komputer</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">Teknik Elektronika</th>
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

                        <div class="card mb-4 " style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title ">
                                        <th scope="col">Teknik Telekomunikasi</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title">
                                        <th scope="col">Teknik Elektro Industri</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/riwayat">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title">
                                        <th scope="col">Teknik Mekatronika</th>
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

                        <div class="card mb-4 " style="--cui-card-cap-bg: #3b5998">
                            <a href="#">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title ">
                                    <th scope="col">Sistem Pembangkit Energi</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="#">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title">
                                        <th scope="col">Teknologi Game</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="/detail-d3mmb">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                <div class="title">
                                    <th scope="col">Teknologi Multimedia Dan Broadcasting</th>
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

                        <div class="card mb-4 " style="--cui-card-cap-bg: #3b5998">
                            <a href="/detail-d3internet">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title ">
                                        <th scope="col">Teknologi Rekayasa Internet</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="#">    
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title">
                                        <th scope="col">Teknologi Rekayasa Multimedia</th>
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

                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <a href="#">
                                <button class="card-header position-relative d-flex justify-content-center align-items-center text-white bg-dark">
                                    <div class="title">
                                        <th scope="col">Sains Data Terapan</th>
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
