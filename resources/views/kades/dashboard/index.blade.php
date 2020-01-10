@extends('master')
@section('title', 'List data RT' )

@section('content')
<a href="{{route('kades.createRT')}}" class="btn btn-success my-2 my-sm-0">Tambah Data</a>
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
                                <th class="text-center" scope="col">Nama</th>
                                <th class="text-center" scope="col">Tempat, Tanggal Lahir</th>
                                <th class="text-center" scope="col">Alamat</th>
                                <th class="text-center" scope="col">No HP</th>
                                <th class="text-center" scope="col">Email</th>
                                <th class="text-center" scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key =>$item )
                            <tr>
                                <th scope="row">{{ $data->firstItem() + $key }}</th>
                                <td class="text-center">{{ $item ->nama_rt}}</td>
                                <td class="text-center">{{ $item ->nama_lengkap}}</td>
                                <td class="text-center">{{ $item ->tempat_lahir}}, {{ $item ->tanggal_lahir}}</td>
                                <td class="text-center">{{ $item ->alamat}}</td>
                                <td class="text-center">{{ $item ->no_hp}}</td>
                                <td class="text-center">{{ $item ->email}}</td>
                                <td class="text-center">{{ $item ->password}}</td>

                                <td>
                                    <a href="{{route('kades.editRT',  ['id'=>$item])}}"><i class="material-icons"
                                            data-toggle="tooltip" title="" data-original-title="Edit"
                                            style="color: #EEB416;">edit</i></a>
                                    <a href="{{route('kades.deleteRT',['id'=>$item->id])}}">
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
