@extends('layouts.app')
@section('title', 'MOJAR APP')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Update Timeline</h1>
                            <div id="content">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Agenda</label>
                                    <input type="text" class="form-control" aria-descril>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" aria-descril>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-labell">Tanggal</label>
                                        <div class="input-group date" id="datepicker">
                                            <input type="date" class="form-control" id="date"/>
                                        </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
