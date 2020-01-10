@extends('masterRT')
@section('title', 'create Warga' )

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Tambah Data Warga</div>
                    <div class="card-body">
                        <form action="{{ route('rt.storeWarga') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <input type="text" hidden value="{{ Auth::user()->id }}" name="rt_id">
                                <label for="no_kk" class="col-sm-3 col-form-label">No KK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_kk" placeholder="No Kartu Keluarga"
                                        value="{{ old('no_kk') }}"
                                        class="form-control @error('no_kk') is-invalid @enderror" id="no_kk"
                                        aria-describedby="nokkHelp" maxlength="16" required>
                                    <small id="nokkHelp" class="form-text text-muted">
                                        No KK harus diisi 16 karakter.
                                    </small>
                                    @error('no_kk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_lengkap" placeholder="Nama"
                                        value="{{ old('nama_lengkap') }}"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                <small class="col-sm-9">
                                    <input type="text" name="nik" placeholder="NIK" value="{{ old('nik') }}"
                                        class="form-control @error('nik') is-invalid @enderror" id="nik"
                                        aria-describedby="nikHelp" maxlength="16" required>
                                    <small id="nikHelp" class="form-text text-muted">
                                        NIK harus diisi 16 karakter.
                                    </small>
                                    @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </small>
                            </div>

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-3 pt-0">jenis_kelamin</legend>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="jenis_kelamin">
                                            <option selected> pilih jenis kelamin ...</option>
                                            <option value="1" @if (old('jenis_kelamin')=="1" ) {{ 'selected' }} @endif>
                                                Laki -Laki</option>
                                            <option value="2" @if (old('jenis_kelamin')=="2" ) {{ 'selected' }} @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tempat_lahir" placeholder="Nama Kota Kelahiran"
                                        value="{{ old('tempat_lahir') }}"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" min="1940-01-01" max="2020-02-02" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="agama">
                                        <option selected>pilih agama ...</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Kristen Protestan</option>
                                        <option value="3">Katolik</option>
                                        <option value="4">Budha</option>
                                        <option value="5">Hindu</option>
                                        <option value="6">Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan
                                    Terakhir</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="pendidikan_terakhir">
                                        <option selected> pilih pendidikan_terakhir ...</option>
                                        <option value="1">Tidak/Belum Sekolah</option>
                                        <option value="2">Belum Tamat SD/Sederajat</option>
                                        <option value="3">Tamat SD/Sederajat</option>
                                        <option value="4">SLTP/Sederajat</option>
                                        <option value="5">SLTA/Sederajat</option>
                                        <option value="6">Diploma I/II</option>
                                        <option value="7">Akademi/Diploma III/S.Muda</option>
                                        <option value="8">Diploma IV/ Strata I</option>
                                        <option value="9">Strata II</option>
                                        <option value="10">Strata III</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_pekerjaan" class="col-sm-3 col-form-label">Jenis Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jenis_pekerjaan" placeholder="pekerjaan"
                                        value="{{ old('jenis_pekerjaan') }}"
                                        class="form-control @error('jenis_pekerjaan') is-invalid @enderror" required>
                                    @error('jenis_pekerjaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="status_perkawinan">
                                        <option value="1">Belum Kawin</option>
                                        <option value="2">Kawin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea rows="3" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        required> {{ old('alamat') }} </textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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
