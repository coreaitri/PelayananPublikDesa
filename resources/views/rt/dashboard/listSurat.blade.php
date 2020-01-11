@extends('masterRT')
@section('title', 'List Surat Warga' )

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<div>Daftar Surat Masuk</a>
    <br><br>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <td class="text-center" scope="col">Tanggal Masuk Surat</td>
                                    <th class="text-center" scope="col">Tipe Surat</th>
                                    <th class="text-center" scope="col">NO KK</th>
                                    <th class="text-center" scope="col">Nama Lengkap</th>
                                    <th class="text-center" scope="col">NIK</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $item ->created_at}}</td>
                                    <td class="text-center">{{ $item ->tipe_surat}}</td>
                                    <td class="text-center">{{ $item ->warga->no_kk}}</td>
                                    <td class="text-center">{{ $item ->warga->nama_lengkap}}</td>
                                    <td class="text-center">{{ $item ->warga->nik}}</td>
                                    <td class="text-center">
                                        @if($item->status == 0)
                                        <span class="badge badge-secondary">Pending</span>
                                        @elseif($item->status == 2)
                                        <span class="badge badge-danger">DiTolak</span>
                                        @else
                                        <span class="badge badge-success">Diterima</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item ->status == 0)
                                        <a href="{{ route('rt.statusSurat', ['id'=>$item->id]) }}">Ya</a>

                                        <a href="{{ route('rt.statusSurat', ['id'=>$item->id,'tolak' => true]) }}">
                                            <i class="material-icons" data-toggle="tooltip" title=""
                                                data-original-title="no">Tidak</i>
                                        </a>
                                        @else
                                        No Action
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
