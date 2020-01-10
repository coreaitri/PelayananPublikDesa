@extends('masterRT')
@section('title', 'dashboard')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 style="font-family:cursive; text-align: center;">Selamat Datang Pak RT</h5>
                <br>
                <img class="brand-logo-mini" src="{{asset('storage/image/bangundesa.png')}}" alt="homepage" style="width: 100%; max-width: 400px; height: auto; display: block; margin-left: auto;
                 margin-right: auto;">
                <br>
                <p class=" card-description">
                    Silahkan cek Surat Masuk
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
