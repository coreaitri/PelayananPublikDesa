@extends('masterWarga')
@section('title', 'surat terkirim')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                <h4 class="font-weight-bold">Hi, {{ Auth::user()->name }}</h4>
                <h4 class="font-weight-normal mb-0">Warga {{ Auth::user()->rt->nama_rt }}</h4>
            </div>
            <div class="col-12 col-xl-7">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body"> <br>
                <div style="font-family:cursive; margin-left:20pt">History Surat Keluar </div><br>
                <div class="table-responsive"
                    style="margin-left:20pt; margin-top:20pt; margin-bottom:20pt; margin-right=0;">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Tipe Surat</th>
                                <th class="text-center" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item )
                            <tr>
                                <td class="text-center">{{ $item ->tipe_surat}}</td>
                                <td class="text-center">
                                    @if($item->status == 0)
                                    <div class="badge badge-secondary">Surat belum dilihat RT</div>
                                    @elseif($item->status == 2)
                                    <div class="badge badge-danger">Surat Tidak Disetujui RT.</div><br><br> Silahkan
                                    Konfirmasi Langsung ke RT setempat.
                                    @elseif($item->status == 3)
                                    <div class="badge badge-success">Surat Telah Disetujui Kades.</div><br><br> Silahkan
                                    ambil surat anda ke kantor desa pada saat jam kerja
                                    @else
                                    <div class="badge badge-info">Surat Telah Disetujui RT.</div> <br><br>
                                    Silahkan Tunggu Konfirmasi dari kepala desa.
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
