@extends('layouts.app')
@section('title', 'DETAIL MATA KULIAH | MOJAR APP')
@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                    {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <p id="keterangan"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <h1 class="tittle-utama">Detail Mata Kuliah</h1>
        {{-- <h5 class="card-title tittle-login">Beranda \ Daftar Dosen</h5> --}}
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body px-5">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card" style="border: none;">
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <br>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Mata Kuliah</th>
                                                    <td id="tittle-td">: Workshop Kecerdasan Buatan (AI)</td>
                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">No. Kode</th>
                                                    <td id="tittle-td">: AI007</td>
                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Semester</th>
                                                    <td id="tittle-td">: 4</td>
                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Tahun Pendanaan</th>
                                                    <td id="tittle-td">: 2022</td>
                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Jenis Pendanaan</th>
                                                    <td id="tittle-td">: Modul Pratikum</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="vl"></div>
                            <div class="col-sm-6">
                                <div class="card" style="border: none;">
                                    <div class="card-body" id="line-card">
                                        <table class="table">
                                            <tbody>
                                                <br>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th" id="text-color-detail">Ketua Tim
                                                        Pembuat</th>
                                                    <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom.</td>
                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th" id="text-color-detail">Anggota Tim
                                                        Pembuat</th>
                                                    <td id="tittle-td">: Tri Hadiah Muliawati, S.ST., M.Kom. <br>
                                                        : Tri Hadiah Muliawati, S.ST., M.Kom. <br>
                                                        : Tri Hadiah Muliawati, S.ST., M.Kom.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table">
                                            <tbody>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Proposal</th>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-outline-primary">Lihat</button>
                                                        @if ($pengadaan->id_pengusul == Auth::id())
                                                            <button type="button"
                                                                class="btn btn-primary ml-2">Edit</button>
                                                        @endif
                                                    </td>

                                                </tr>
                                                <tr id="garis">
                                                    <th scope="row" class="tittle-th">Modul Ajar</th>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-outline-primary">Lihat</button>
                                                        @if ($pengadaan->id_pengusul == Auth::id())
                                                            <button type="button"
                                                                class="btn btn-primary ml-2">Edit</button>
                                                        @endif
                                                    </td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                @if (!in_array(Auth::user()->id_role, [3, 10]))
                                    <h5 class="mb-0">Apakah Anda Setuju Dengan Pengadaan Ini?</h5>
                                    <form action="/jawab-pengadaan" method="POST">
                                        @csrf
                                        <input type="hidden" name="pengadaan_id" value="{{ $pengadaan->id }}">
                                        <input type="hidden" name="approval_id"
                                            value="{{ $pengadaan->approval ? $pengadaan->approval->id : '' }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                        <div>
                                            <label for="exampleFormControlTextarea1" class="form-label">Keterangan <small
                                                    class="text-danger">(Wajib Bila Tidak Meneyetujui)</small></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="note" id="" cols="70"
                                                rows="10">{!! $pengadaan->approval ? $pengadaan->approval->note : '' !!}</textarea>
                                        </div>
                                        <br>
                                        <input type="submit" name="answer" value="Approve"
                                            class="btn btn-outline-success mr-2">
                                        <input type="submit" name="answer" value="Not Approve"
                                            class="btn btn-outline-danger">
                                    </form>
                                @else
                                    <div class="mb-3">
                                        <h5>
                                            Status Pengadaan Saat Ini :
                                        </h5>
                                        <table>
                                            @forelse ($pengadaan->approvals as $data)
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="mb-2 badge p-2 alert-{{ $data->answer ? 'success' : 'danger' }}">
                                                            {{ $data->answer ? "Approved By {$data->user->role->nama_role}" : "Denied By {$data->user->role->nama_role}" }}
                                                        </span>
                                                    </td>
                                                    <td><span class="mx-2">:</span></td>
                                                    <td>
                                                        <button class="btn btn-keterangan btn-{{ $data->note ? 'primary' : 'secondary' }}"
                                                            {{ $data->note ? '' : 'disabled' }} data-toggle="modal" data-target="#exampleModal" data-keterangan="{!!$data->note!!}">Keterangan</button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td><span class="badge p-2 alert-warning">Pending</span></td>
                                                </tr>
                                            @endforelse
                                        </table>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('.btn-keterangan').on('click', function() {
                $("#keterangan").html($(this).data('keterangan'));
                // console.log($("#keterangan"));
            });
            // $('#exampleModal').on('show.bs.modal', function (event) {
            //     console.log('test');
            //     var button = $(event.relatedTarget) // Button that triggered the modal
            //     var keterangan = button.data('keterangan') // Extract info from data-* attributes
            //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            //     var modal = $(this)
            //     // modal.find('.modal-title').text('New message to ' + recipient)
            //     modal.find('#keterangan').text(recipient)
            // })
        });
    </script>
@endpush
