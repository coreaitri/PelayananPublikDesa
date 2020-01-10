<?php

namespace App\Http\Controllers\RT;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HistorySuratRT;
use App\Models\RT;
use App\Models\Surat;
use App\Models\Warga;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class RTController extends Controller
{
    public function index()
    {
        // Warga::paginate(5);
        // return auth()->user()->data;
        $warga = auth()->user()->rt->warga()->paginate(5);
        return view('rt.dashboard.index', ['data' => $warga]);
    }

    public function create()
    {
        $rt_id = RT::all();
        return view('rt.dashboard.create', compact('rt_id'));
    }

    public function store(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'no_kk'                  => 'required|min:16|max:16',
                'nama_lengkap'           => 'required',
                'nik'                    => 'required|min:16|max:16',
                'tempat_lahir'           => 'required',
                'tanggal_lahir'          => 'required',
                'jenis_pekerjaan'        => 'required',
                'alamat'                 => 'required',
            ],
            [
                'no_kk.required'                => 'no_kk harus diisi dengan benar',
                'nama_lengkap.required'         => 'nama harus diisi',
                'nik.required'                  => 'nik harus diisi dengan benar',
                'tempat_lahir.required'         => 'tempat_lahir harus diisi',
                'tanggal_lahir.required'        => 'tanggal_lahir harus diisi',
                'jenis_pekerjaan.required'      => 'jenis_pekerjaan harus diisi',
                'alamat.required'               => 'alamat harus diisi',
            ]
        )->validate();


        $warga2         = new \App\Models\User;
        $warga2->rt_id   = $request->rt_id;
        $warga2->name   = $request->nama_lengkap;
        $warga2->email  = $request->nik;
        $warga2->password = Hash::make($request->no_kk);

        $warga2->save();

        $warga = new \App\Models\Warga;
        $warga->rt_id            = $request->rt_id;
        $warga->user_id          = $warga2->id;
        $warga->no_kk            = $request->no_kk;
        $warga->nama_lengkap     = $request->nama_lengkap;
        $warga->nik              = $request->nik;
        $warga->jenis_kelamin    = $request->jenis_kelamin;
        $warga->tempat_lahir     = $request->tempat_lahir;
        $warga->tanggal_lahir    = $request->tanggal_lahir;
        $warga->agama            = $request->agama;
        $warga->pendidikan_terakhir    = $request->pendidikan_terakhir;
        $warga->jenis_pekerjaan        = $request->jenis_pekerjaan;
        $warga->status_perkawinan      = $request->status_perkawinan;
        $warga->alamat                 = $request->alamat;

        $warga->save();

        return redirect()->route('rt.indexWarga')->with('status', '<b> data berhasil dibuat </b>');
    }

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);
        return view('rt.dashboard.edit', ['data' => $warga]);
    }

    public function update(Request $request, $id)
    {
        Validator::make(
            $request->all(),
            [
                'no_kk'                  => 'required|min:16|max:16',
                'nama_lengkap'           => 'required',
                'nik'                    => 'required|min:16|max:16',
                'jenis_kelamin'          => 'required',
                'tempat_lahir'           => 'required',
                'tanggal_lahir'          => 'required',
                'agama'                  => 'required',
                'pendidikan_terakhir'    => 'required',
                'jenis_pekerjaan'        => 'required',
                'status_perkawinan'      => 'required',
                'alamat'                 => 'required',
            ],
            [
                'no_kk.required'                => 'no_kk harus diisi dengan benar',
                'nama_lengkap.required'         => 'nama harus diisi',
                'nik.required'                  => 'nik harus diisi dengan benar',
                'jenis_kelamin.required'        => 'jenis_kelamin harus diisi dengan benar',
                'tempat_lahir.required'         => 'tempat_lahir harus diisi',
                'tanggal_lahir.required'        => 'tanggal_lahir harus diisi',
                'agama.required'                => 'agama harus diisi',
                'pendidikan_terakhir.required'  => 'pendidikan_terakhir harus diisi',
                'jenis_pekerjaan.required'      => 'jenis_pekerjaan harus diisi',
                'status_perkawinan.required'    => 'status_perkawinan harus diisi',
                'alamat.required'               => 'alamat harus diisi',
            ]
        )->validate();




        $warga                   = \App\Models\Warga::findOrFail($id);
        $warga->no_kk            = $request->no_kk;
        $warga->nama_lengkap     = $request->nama_lengkap;
        $warga->nik              = $request->nik;
        $warga->jenis_kelamin    = $request->jenis_kelamin;
        $warga->tempat_lahir     = $request->tempat_lahir;
        $warga->tanggal_lahir    = $request->tanggal_lahir;
        $warga->agama            = $request->agama;
        $warga->pendidikan_terakhir    = $request->pendidikan_terakhir;
        $warga->jenis_pekerjaan        = $request->jenis_pekerjaan;
        $warga->status_perkawinan      = $request->status_perkawinan;
        $warga->alamat                 = $request->alamat;

        $warga->save();

        $warga2             = \App\Models\User::findOrFail($warga->user_id);
        $warga2->name       = $request->nama_lengkap;
        $warga2->email      = $request->nik;
        $warga2->password   = Hash::make($request->no_kk);

        $warga2->save();

        return redirect()->route('rt.indexWarga')->with('status', '<b> data berhasil dibuat </b>');
    }

    public function destroy($id)
    {

        $warga = Warga::findOrFail($id);
        $warga->delete($id);

        $warga2 = User::findOrFail($id);
        $warga2->delete($id);

        return redirect()->route('rt.indexWarga')->with('status', 'Data Berhasil Dihapus !!');
    }

    public function suratMasuk()
    {

        $surat = Surat::where('rt_id', '=', Auth::user()->rt->id)->latest()->get();

        return view('rt.dashboard.listSurat', ['data' => $surat]);
    }

    public function status(Request $request)
    {
        $surat                   = \App\Models\Surat::findOrFail($request->id);
        if ($request->tolak) {
            $surat->status          = 2;
        } else {

            $surat->status          = 1;
        }

        $surat->save();
        return redirect()->route('rt.listSuratWarga');
    }
}
