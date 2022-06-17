@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('title', 'Pengajuan Modul')
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
                            <form action="riwayat" method="POST"> 
                                @csrf

                                <div class="mb-3">
                                    <strong><label for="akademik" class="form-label">Akademik</label></strong>
                                    <select class="form-select"  name="" id="akademik">
                                        <option hidden>Pilih Akademik</option>
                                        @foreach ($akademik as $item)
                                        <option value="{{ $item->id }}">{{ $item->akademik }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label for="prodi" class="form-label">Prodi</label></strong>
                                    <select class="form-select"  name="id_prodi" id="prodi">
                                        {{-- <option hidden>Pilih Prodi</option> --}}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Mata Kuliah</label></strong>
                                    <select class="form-select" name="id_matkul" aria-label="Default select example">
                                        <option selected>Pilih Mata Kuliah</option>
                                        @foreach ($matkul as $item)
                                            <option value="{{ $item->id_matkul }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label class="form-label">Jenis Modul</label></strong>
                                    <select class="form-select" name="id_modul" aria-label="Default select example">
                                        <option selected>Pilih Jenis Modul</option>
                                        @foreach ($modul as $item)
                                            <option value="{{ $item->id_modul }}">{{ $item->jenis_modul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="mb-3">
                                    <strong><label class="form-label">Kuota Modul</label></strong>
                                    <input type="number" class="form-control" nama="kuota">
                                </div> --}}
                                <div class="mb-3">
                                    <strong><label class="form-label">Ketua Tim Pengusul</label></strong>
                                    <select class="form-select" name="id_dosen" aria-label="Default select example">
                                        <option selected>Pilih Ketua Tim Untuk Pengajuan Modul Ini</option>
                                        @foreach ($dosen as $item)
                                            <option value="{{ $item->id_dosen }}">{{ $item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <strong><label for="formFile" class="form-label">Upload Proposal Pengajuan (PDF)</label></strong>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <input id="btn-sa" class="btn btn-success btn-lg" type="submit" value="Submit">
                            </form>
                        </div>


                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                        <script>
                            $(document).ready(function() {
                            $('#akademik').on('change', function() {
                               var akademikID = $(this).val();
                               if(akademikID) {
                                   $.ajax({
                                       url: '/getProdi/'+akademikID,
                                       type: "GET",
                                       data : {"_token":"{{ csrf_token() }}"},
                                       dataType: "json",
                                       success:function(data)
                                       {
                                        console.log(data);
                                         if(data){
                                            $('#prodi').empty();
                                            $('#prodi').append('<option hidden>Pilih Prodi</option>'); 
                                            $.each(data, function(key, prodi){
                                                $('select[name="id_prodi"]').append('<option value="'+ prodi.id_prodi +'">' + prodi.nama+ '</option>');
                                            });
                                        }else{
                                            $('#prodi').empty();
                                        }
                                     }
                                   });
                               }else{
                                 $('#prodi').empty();
                               }
                            });
                            });
                        </script>
                    @endsection
