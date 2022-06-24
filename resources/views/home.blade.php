@extends('layouts.app')
@section('title', 'HOME | MOJAR APP')
<link rel="stylesheet" href="{{ url('css/card-data.css') }}">
@section('content')
<div class="container">
    @csrf
    <h2 class="tittle-utama">Data Pengadaan Modul Tahun 2022</h2>
    {{-- <h5 class="card-title tittle-login">Beranda</h5> --}}
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-columns">
                        @forelse ($datas as $item)
                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">{{$item['nama_prodi']}}</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>2
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>{{$item['data']['praktikum'] + $item['data']['teori'] + $item['data']['interaktif']}}
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>{{$item['data']['praktikum']}}
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>{{$item['data']['teori']}}
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>{{$item['data']['interaktif']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse

{{-- 
                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Elektronika</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Telekomunikasi</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Elektro Industri</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Informatika</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Mekatronika</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tile">
                            <div class="wrapper">
                                <div class="header">Teknik Komputer</div>
                                <div class="dates">
                                    <div class="start">
                                        <strong>Alokasi Kuota Tahun Ini</strong>3
                                        <span></span>
                                    </div>
                                    <div class="ends">
                                        <strong>Pengajuan Modul Baru</strong>2
                                    </div>
                                </div>
                                <div class="stats">
                                    <div>
                                        <strong>PRATIKUM</strong>3
                                    </div>

                                    <div>
                                        <strong>TEORI</strong>2
                                    </div>

                                    <div>
                                        <strong>INTERAKTIF</strong>5
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        

                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>    

@endsection
