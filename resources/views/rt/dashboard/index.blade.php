@extends('masterRT')
@section('title', 'List data Warga' )

@section('content')
<a href="{{route('rt.createWarga')}}" class="btn btn-success my-2 my-sm-0">Tambah Data</a>
<br><br>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th class="text-center" scope="col">RT</th>
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key =>$item )
                            <tr>
                                <th scope="row">{{ $data->firstItem() + $key }}</th>
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

                                <td>
                                    <a href="{{route('rt.editWarga',  ['id'=>$item->id])}}"><i class="material-icons"
                                            data-toggle="tooltip" title="" data-original-title="Edit"
                                            style="color: #EEB416;">edit</i></a>
                                    <a href="{{route('rt.deleteWarga',['id'=>$item->id])}}">
                                        <i class="material-icons" data-toggle="tooltip" title=""
                                            data-original-title="Delete">delete</i>
                                        @csrf
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
