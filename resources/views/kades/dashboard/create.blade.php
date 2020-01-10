@extends('master')
@section('title', 'create RT' )

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Tambah Data RT</div>
                    <div class="card-body">
                        <form action="{{ route('kades.storeRT') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="rt">Nama RT</label>
                                <input type="text" name="nama_rt" placeholder="rt berapa" value="{{ old('nama_rt') }}"
                                    class="form-control @error('rt') is-invalid @enderror" id="nama_rt">
                                @error('nama_rt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama_lengkap"> Nama Ketua RT </label>
                                <input type="text" name="nama_lengkap" placeholder="Nama"
                                    value="{{ old('nama_lengkap') }}"
                                    class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                @error('nama_lengkap')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir </label>
                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"
                                    value="{{ old('tempat_lahir') }}"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                                @error('tempat_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir </label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                                @error('tanggal_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat </label>
                                <textarea rows="3" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    required> {{ old('alamat') }} </textarea>
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="no_hp"> No HP </label>
                                <input type="text" name="no_hp" placeholder="08xxxx" value="{{ old('no_hp') }}"
                                    class="form-control @error('no_hp') is-invalid @enderror" required>
                                @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="text" name="email" placeholder="your_email@examp.com"
                                    value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                                    required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"> Password </label>
                                <input type="text" name="password" value="{{ old('password') }}"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary align-content-center">submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
