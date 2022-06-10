@extends('layouts.app-tim-reviewer')
@section('title', 'TIMELINE | MOJAR APP')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h6 class="card-title">Timeline</h6> --}}
                        
                        <div id="content">
                            <ul class="timeline">
                           {{--     @foreach ($dataTimeline as $item)
                                    <li class="event"
                                        data-date="{{ date('d F', strtotime($item->tgl_awal)) }} - {{ date('d F', strtotime($item->tgl_akhir)) }}">
                                        <h3>{{ $item->judul }}</h3>
                                        <p>{{ $item->deskripsi }}</p>
                                    </li>
                                @endforeach --}}
                                 <li class="event" data-date="05/05/2022">
                                    <h3>Deadline Pengumpulan Proposal</h3>
                                    <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                                </li>
                                <li class="event" data-date="04/05/2022" >
                                    <h3>Pengumpulan Kontrak yang sudah Ditandatangani</h3>
                                    <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP &amp; Busta Rhymes as an opening show.</p>
                                </li>
                                <li class="event" data-date="03/05/2022">
                                    <h3>Pencairan Dana Tahap 1 (70%)</h3>
                                    <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>
                                </li>
                                <li class="event" data-date="02/05/2022">
                                    <h3>Pengerjaan</h3>
                                    <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                </li>
                                <li class="event" data-date="01/05/2022">
                                    <h3>Deadline Pengumpulan Modul</h3>
                                    <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                </li>
                                <li class="event" data-date="27/04/2022">
                                    <h3>Proses Review</h3>
                                    <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                </li>
                                <li class="event" data-date="25/04/2022">
                                    <h3>Proses Revisi</h3>
                                    <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                </li>
                                <li class="event" data-date="20/04/2022">
                                    <h3>Pencairan Dana Tahap II (30%)</h3>
                                    <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
