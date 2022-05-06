@extends('layouts.app')
@section('title', 'MOJAR APP')
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
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-group">Tanggal Awal</label>
                                            <input type="date" class="form-control" name="tgl_awal">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-group">Tanggal Berakhir</label>
                                            <input type="date" class="form-control" name="tgl_akhir">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
