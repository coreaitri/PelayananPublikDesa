<?php

namespace App\Http\Controllers\Kades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RT;
use App\Models\Surat;
use App\Models\UserRT;
use App\Models\Warga;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class KadesController extends Controller
{
    public function index()
    {
        // $data = DataRTbyKades::all();
        $data = RT::paginate(5);
        return view('kades.dashboard.index', ['data' => $data]);
    }

    public function create()
    {
        return view('kades.dashboard.create');
    }

    public function store(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'nama_rt'       => 'required',
                'nama_lengkap'  => 'required',
                'tempat_lahir'  => 'required',
                'tanggal_lahir' => 'required',
                'alamat'        => 'required',
                'no_hp'         => 'required',
                'email'         => 'required|email:rfc',
                'password'      => 'required',
            ],
            [
                'nama_rt.required'      => 'rt harus diisi',
                'nama_lengkap.required' => 'nama harus diisi',
                'tempat_lahir.required' => 'tempat_lahir harus diisi',
                'tanggal_lahir.required' => 'tanggal_lahir harus diisi',
                'alamat.required'       => 'alamat harus diisi',
                'no_hp.required'        => 'no_hp harus diisi',
                'email.required'        => 'email harus diisi',
                'email.email'           => 'email harus sesuai format email',
                'password.required'     => 'password harus diisi',

            ]
        )->validate();


        $data2 = new \App\Models\UserRT;
        $data2->name = $request->nama_rt;
        $data2->email = $request->email;
        $data2->password = Hash::make($request->password);

        $data2->save();

        $data = new \App\Models\RT;
        $data->userRT_id            = $data2->id;
        $data->nama_rt              = $request->nama_rt;
        $data->nama_lengkap         = $request->nama_lengkap;
        $data->tempat_lahir         = $request->tempat_lahir;
        $data->tanggal_lahir        = $request->tanggal_lahir;
        $data->alamat               = $request->alamat;
        $data->no_hp                = $request->no_hp;
        $data->email                = $request->email;
        $data->password             = $request->password;

        $data->save();


        return redirect()->route('kades.indexRT')->with('status', '<b> data berhasil dibuat </b>');
    }

    public function edit($id)
    {
        $data = RT::findOrFail($id);
        return view('kades.dashboard.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        Validator::make(
            $request->all(),
            [
                'nama_rt'       => 'required',
                'nama_lengkap'  => 'required',
                'tempat_lahir'  => 'required',
                'tanggal_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat'        => 'required',
                'no_hp'         => 'required',
                'email'         => 'required',
                'password'      => 'required',
            ],
            [
                'rt.required'          => 'rt harus diisi',
                'nama_lengkap.required' => 'nama harus diisi',
                'tempat_lahir.required' => 'tempat_lahir harus diisi',
                'tanggal_lahir.required' => 'tanggal_lahir harus diisi',
                'alamat.required'       => 'alamat harus diisi',
                'no_hp.required'    => 'no_hp harus diisi',
                'email.required'    => 'email harus diisi',
                'email.email'       => 'email harus sesuai format email',
                'password.required' => 'password harus diisi',

            ]
        )->validate();


        $data2 = \App\Models\UserRT::findOrFail($id);
        $data2->name = $request->nama_rt;
        $data2->email = $request->email;
        $data2->password = Hash::make($request->password);

        $data2->save();

        $data = \App\Models\RT::findOrFail($id);
        $data->userRT_id            = $data2->id;
        $data->nama_rt              = $request->nama_rt;
        $data->nama_lengkap         = $request->nama_lengkap;
        $data->tempat_lahir         = $request->tempat_lahir;
        $data->tanggal_lahir        = $request->tanggal_lahir;
        $data->alamat               = $request->alamat;
        $data->no_hp                = $request->no_hp;
        $data->email                = $request->email;
        $data->password             = $request->password;

        $data->save();

        return redirect()->route('kades.indexRT')->with('status', '<b> data berhasil dibuat </b>');
    }

    public function destroy($id)
    {
        $data2 = UserRT::findOrFail($id);
        $data2->delete($id);

        $data = RT::findOrFail($id);
        $data->delete($id);

        return redirect()->route('kades.indexRT')->with('status', 'Data Berhasil Dihapus !!');
    }

    public function indexWarga()
    {
        $warga = Warga::all();
        return view('kades.dashboard.list_warga', ['data' => $warga]);
    }

    public function suratMasuk()
    {

        $surat = Surat::where('status', '=', 1)->latest()->get();

        return view('kades.dashboard.listSurat', ['data' => $surat]);
    }
}
