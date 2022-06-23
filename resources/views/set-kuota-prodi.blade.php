@extends('layouts.app')
@section('title', 'PENGAJUAN MODUL | MOJAR APP')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Pengajuan Modul Ajar</h2>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div>
                            <form action="/set/kuota" method="POST">
                                @csrf
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <strong><label for="akademik" class="form-label">Akademik</label></strong>
                                    <select class="form-select" name="" id="akademik" required>
                                        <option hidden>Pilih Akademik</option>
                                        @foreach ($akademik as $item)
                                            <option value="{{ $item->id }}">{{ $item->akademik }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label for="prodi" class="form-label">Prodi</label></strong>
                                    <select class="form-select" name="id_prodi" id="prodi" required>
                                        {{-- <option hidden>Pilih Prodi</option> --}}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Set Kuota Prodi</label>
                                    <input type="number" class="form-control" name="kuota">
                                </div>

                                <input id="btn-sa" class="btn btn-success btn-lg " type="submit" value="Submit">
                            </form>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
                        </script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                        <script>
                            $(document).ready(function() {
                                $('#akademik').on('change', function() {
                                    var akademikID = $(this).val();
                                    if (akademikID) {
                                        $.ajax({
                                            url: '/getProdi/' + akademikID,
                                            type: "GET",
                                            data: {
                                                "_token": "{{ csrf_token() }}"
                                            },
                                            dataType: "json",
                                            success: function(data) {
                                                console.log(data);
                                                if (data) {
                                                    $('#prodi').empty();
                                                    $('#prodi').append('<option hidden>Pilih Prodi</option>');
                                                    $.each(data, function(key, prodi) {
                                                        $('select[name="id_prodi"]').append(
                                                            '<option value="' + prodi.id_prodi + '">' +
                                                            prodi.nama + '</option>');
                                                    });
                                                } else {
                                                    $('#prodi').empty();
                                                }
                                            }
                                        });
                                    } else {
                                        $('#prodi').empty();
                                    }
                                });
                            });
                        </script>
                    @endsection
