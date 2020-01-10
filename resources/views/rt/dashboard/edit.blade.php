@extends('masterRT')
@section('title', 'edit data Warga' )

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Edit Data Warga</div>
                    <div class="card-body">
                        <form action="{{ route('rt.updateWarga', ['$id'=>$data->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="no_kk" class="col-sm-3 col-form-label">No KK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_kk" placeholder="No Kartu Keluarga"
                                        value="{{$data->no_kk}}"
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
                                        value="{{$data->nama_lengkap}}"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                <small class="col-sm-9">
                                    <input type="text" name="nik" placeholder="NIK" value="{{ $data->nik }}"
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
                                    <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="jenis_kelamin">
                                            <option> pilih jenis kelamin ...</option>
                                            <option value="1"
                                                {{$data->jenis_kelamin == 'Laki-laki' ? ' selected' : ''}}>
                                                Laki-Laki</option>
                                            <option value="2"
                                                {{$data->jenis_kelamin == 'Perempuan' ? ' selected' : ''}}>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group row">
                                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tempat_lahir" placeholder="Nama Kota Kelahiran"
                                        value="{{$data->tempat_lahir}}"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                                    @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}"
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
                                        <option value="1" @if ($data->agama == "Islam")
                                            selected @endif> Islam</option>
                                        <option value="2" @if ($data->agama == "Kristen Protestan")
                                            selected @endif >Kristen Protestan</option>
                                        <option value="3" @if ($data->agama == "Katolik")
                                            selected @endif >Katolik</option>
                                        <option value="4" @if ($data->agama == "Budha")
                                            selected @endif >Budha</option>
                                        <option value="5" @if ($data->agama == "Hindu")
                                            selected @endif >Hindu</option>
                                        <option value="6" @if ($data->agama == "Konghucu")
                                            selected @endif >Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pendidikan_terakhir" class="col-sm-3 col-form-label">Pendidikan
                                    Terakhir</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="pendidikan_terakhir">
                                        <option selected> pilih pendidikan_terakhir ...</option>
                                        <option value="1" @if ($data->pendidikan_terakhir == "Tidak/Belum Sekolah")
                                            selected @endif>Tidak/Belum Sekolah</option>
                                        <option value="2" @if ($data->pendidikan_terakhir == "Belum Tamat SD/Sederajat")
                                            selected @endif >Belum Tamat SD/Sederajat</option>
                                        <option value="3" @if ($data->pendidikan_terakhir == "Tamat SD/Sederajat")
                                            selected @endif> Tamat SD/Sederajat</option>
                                        <option value="4" @if ($data->pendidikan_terakhir == "SLTP/Sederajat")
                                            selected @endif> SLTP/Sederajat</option>
                                        <option value="5" @if ($data->pendidikan_terakhir == "SLTA/Sederajat")
                                            selected @endif> SLTA/Sederajat</option>
                                        <option value="6" @if ($data->pendidikan_terakhir == "Diploma I/II")
                                            selected @endif> Diploma I/II</option>
                                        <option value="7" @if ($data->pendidikan_terakhir == "Akademi/Diploma
                                            III/S.Muda") selected @endif> Akademi/Diploma III/S.Muda</option>
                                        <option value="8" @if ($data->pendidikan_terakhir == "Diploma IV/ Strata I")
                                            selected @endif> Diploma IV/ Strata I</option>
                                        <option value="9" @if ($data->pendidikan_terakhir == "Strata II")
                                            selected @endif> Strata II</option>
                                        <option value="10" @if ($data->pendidikan_terakhir == "Strata III")
                                            selected @endif> Strata III</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_pekerjaan" class="col-sm-3 col-form-label">Jenis Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jenis_pekerjaan" placeholder="pekerjaan"
                                        value="{{$data->jenis_pekerjaan}}"
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
                                        <option value="1" @if ($data->status_perkawinan == "Belum Kawin")
                                            selected @endif> Belum Kawin</option>
                                        <option value="2" @if ($data->status_perkawinan == "Kawin")
                                            selected @endif> Kawin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea rows="3" name="alamat" placeholder="Alamat" value="{{$data->alamat}}"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        required> {{$data->alamat}} </textarea>
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
    @endsection
