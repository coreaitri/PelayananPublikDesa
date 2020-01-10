@extends('masterWarga')
@section('title', 'dashboard')

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
            <div class="card-body">
                <h5 style="font-family:cursive; text-align: center;">Keperluan Surat</h5>
                <br>
                <button class="btn btn-warning btn-lg btn-block"><a href="{{route('warga.suratDomisili')}}"> Mengurus
                        Surat
                        Domisili
                    </a></button>
                <button class="btn btn-warning btn-lg btn-block"><a href="{{route('warga.suratPrasejahtera')}}">
                        Mengurus
                        Surat Prasejahtera </a></button>
            </div>
        </div>
    </div>
</div>
@endsection
