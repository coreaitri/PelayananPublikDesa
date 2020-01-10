@extends('master')
@section('title', 'List Data Warga' )

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<div>LIST DATA WARGA</a>
    <br><br>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">RT</th>
                                    <th class="text-center" scope="col">NO KK</th>
                                    <th class="text-center" scope="col">Nama Lengkap</th>
                                    <th class="text-center" scope="col">NIK</th>
                                    <th class="text-center" scope="col">Jenis Kelamin</th>
                                    <th class="text-center" scope="col">Tempat, Tanggal Lahir</th>
                                    <th class="text-center" scope="col">Agama</th>
                                    <th class="text-center" scope="col">Pendidikan Terakhir</th>
                                    <th class="text-center" scope="col">Pekerjaan</th>
                                    <th class="text-center" scope="col">Status Perkawinan</th>
                                    <th class="text-center" scope="col">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item )
                                <tr>
                                    <td class="text-center">{{ $loop ->iteration}}</td>
                                    <td class="text-center">{{ $item ->rt_id}}</td>
                                    <td class="text-center">{{ $item ->no_kk}}</td>
                                    <td class="text-center">{{ $item ->nama_lengkap}}</td>
                                    <td class="text-center">{{ $item ->nik}}</td>
                                    <td class="text-center">{{ $item ->jenis_kelamin}}</td>
                                    <td class="text-center">{{ $item ->tempat_lahir}}, {{ $item ->tanggal_lahir}}</td>
                                    <td class="text-center">{{ $item ->agama}}</td>
                                    <td class="text-center">{{ $item ->pendidikan_terakhir}}</td>
                                    <td class="text-center">{{ $item ->jenis_pekerjaan}}</td>
                                    <td class="text-center">{{ $item ->status_perkawinan}}</td>
                                    <td class="text-center">{{ $item ->alamat}}</td>
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
