@extends('layouts.app')
@section('title', 'TIMELINE | MOJAR APP')
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Tambah Timeline</h1>
        <br>
        <form action="/list-timeline/{{$timeline->id}}" method="POST">
        @method('PUT')
        @csrf
            <div class="row" id="row-timeline">
                <div id="col-timeline" class="col-sm-12">
                    <div class="card">
                        {{-- <div class="card-header d-flex justify-content-end">
                            <button>close</button>
                        </div> --}}
                        <div class="card-body">
                            <br>
                            <div>
                                {{-- <h3>Set Timeline</h3> --}}
                                <div class="mb-3">
                                    <strong><label class="form-label">Keterangan Timeline</label></strong>
                                    <input type="text" class="form-control" name="judul" value="{{$timeline->judul}}">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <strong><label class="form-group">Tanggal Mulai</label></strong>
                                            <input type="date" class="form-control" name="tgl_awal" value="{{$timeline->tgl_awal}}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <strong><label class="form-group">Tanggal Selesai</label></strong>
                                            <input type="date" class="form-control" name="tgl_akhir" value="{{$timeline->tgl_akhir}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input id="btn-sa" class="btn btn-success btn-lg px-4 " type="submit" value="save">
            {{-- <button type="button" class="btn btn-primary btn-lg px-4" id="btn-add">Tambah Form</button> --}}
        </form>
@endsection
{{-- @push('page_scripts')
<script>
    $(document).ready(function() {
        $("#btn-add").on('click', function() {
                $("#col-timeline").clone().appendTo("#row-timeline");
            });
        });
    </script>
@endpush --}}
