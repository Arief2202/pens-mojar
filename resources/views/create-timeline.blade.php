@extends('layouts.app')
@section('title', 'TIMELINE | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Tambah Timeline</h1>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            {{-- <h3>Set Timeline</h3> --}}
                            <form action="list-timeline" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <strong><label class="form-label">Judul</label></strong>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Deskripsi</label></strong>
                                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <strong><label class="form-group">Tanggal Mulai</label></strong>
                                            <input type="date" class="form-control" name="tgl_awal">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <strong><label class="form-group">Tanggal Selesai</label></strong>
                                            <input type="date" class="form-control" name="tgl_akhir">
                                        </div>
                                    </div>
                                </div>
                                <input id="btn-sa" class="btn btn-success btn-lg px-4 " type="submit" value="save">
                            </form>
                        </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
