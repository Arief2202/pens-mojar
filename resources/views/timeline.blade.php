@extends('layouts.app')
@section('title', 'MOJAR APP')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h6 class="card-title">Timeline</h6> --}}
                        <a href="/create-timeline"><button class="btn btn-primary">Set Timeline</button></a>
                        <div id="content">
                            <ul class="timeline">
                                @foreach ($dataTimeline as $item)
                                    <li class="event"
                                        data-date="{{ date('d F', strtotime($item->tgl_awal)) }} - {{ date('d F', strtotime($item->tgl_akhir)) }}">
                                        <h3>{{ $item->judul }}</h3>
                                        <p>{{ $item->deskripsi }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
