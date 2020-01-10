@extends('masterRT')
@section('title', 'History Surat Masuk' )

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div>History Surat Masuk </div><br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th class="text-center" scope="col">Tipe Surat</th>
                                <th class="text-center" scope="col">NO KK</th>
                                <th class="text-center" scope="col">Nama Lengkap</th>
                                <th class="text-center" scope="col">NIK</th>
                                <th class="text-center" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-center">{{ $item ->tipe_surat}}</td>
                                <td class="text-center">{{ $item ->warga->no_kk}}</td>
                                <td class="text-center">{{ $item ->warga->nama_lengkap}}</td>
                                <td class="text-center">{{ $item ->warga->nik}}</td>
                                <td class="text-center">
                                    @if($item->status == 0)
                                    <span class="badge badge-secondary">Pending</span>
                                    @else
                                    <span class="badge badge-success">Diterima</span>
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
