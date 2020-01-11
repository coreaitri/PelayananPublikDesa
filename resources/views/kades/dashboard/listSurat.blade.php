@extends('master')
@section('title', 'List Surat' )
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
                                    <td class="text-center">Tanggal Masuk Surat</td>
                                    <th class="text-center" scope="col">Tipe Surat</th>
                                    <th class="text-center" scope="col">NO KK</th>
                                    <th class="text-center" scope="col">Nama Lengkap</th>
                                    <th class="text-center" scope="col">NIK</th>
                                    <th class="text-center" scope="col">RT</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col">Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $item ->updated_at}}</td>
                                    <td class="text-center">{{ $item ->tipe_surat}}</td>
                                    <td class="text-center">{{ $item ->warga->no_kk}}</td>
                                    <td class="text-center">{{ $item ->warga->nama_lengkap}}</td>
                                    <td class="text-center">{{ $item ->warga->nik}}</td>
                                    <td class="text-center">{{ $item ->warga->rt_id}}</td>
                                    <td class="text-center">
                                        @if($item->status == 3)
                                        <span class="badge badge-success">Surat Selesai</span>
                                        @else
                                        <span class="badge badge-secondary">Process Surat</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item ->status == 1)
                                        <a href="{{ route('kades.statusListSuratMasuk', ['id'=>$item->id]) }}">Process
                                            Surat</a>
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
