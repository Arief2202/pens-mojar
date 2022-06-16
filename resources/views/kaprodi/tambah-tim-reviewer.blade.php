@extends('layouts.app-kaprodi')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('title', 'DAFTAR TIM | MOJAR APP')
@section('content')
    <div class="container">
        <h2 class="tittle-utama">Buat Tim Reviewer</h2>
      
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-2">
                    <div class="card-body">
                        <div>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Nama Tim Reviewer 1</label>
                                    <input type="text" class="form-control" name="nama-tim">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Tim Reviewer 2</label>
                                    <input type="text" class="form-control" name="nama-tim">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Tim Reviewer 3</label>
                                    <input type="text" class="form-control" name="nama-tim">
                                </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-danger">Batal</button>
                                        <a href="/edit-tim-reviewer"><button type="button" class="btn btn-warning">Edit</button>
                                        <button class="btn btn-primary">Simpan</button>

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
