<?php

namespace App\Http\Controllers\Warga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Surat;

class WargaController extends Controller
{
    public function suratDomisili()
    {
        $surat = new \App\Models\Surat;
        $surat->user_id = Auth::user()->warga->id;
        $surat->rt_id = Auth::user()->rt->id;
        $surat->tipe_surat = "Surat Domisili";

        $surat->save();
        return redirect()->route('warga.terimakasih');
    }

    public function suratPrasejahtera()
    {
        $surat = new \App\Models\Surat;
        $surat->user_id = Auth::user()->warga->id;
        $surat->rt_id = Auth::user()->rt->id;
        $surat->tipe_surat = "Surat Prasejahtera";

        $surat->save();
        return redirect()->route('warga.terimakasih');
    }

    public function suratKeluar()
    {
        $warga = Auth::user()->warga->id;

        $surat = Surat::where('user_id', '=', $warga)->latest()->get();

        return view('warga.dashboard.permohonanSurat', ['data' => $surat]);
    }
}
