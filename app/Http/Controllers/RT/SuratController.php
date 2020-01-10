<?php

namespace App\Http\Controllers\RT;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;


class SuratController extends Controller
{
    public function historySurat()
    {
        $surat2 = Surat::all();
        $surat = new \App\Models\HistorySuratRT;
        $surat->rt_id = Auth::user()->rt->id;
        $surat->surat_id = $surat2->id;
        $surat->user_id = $surat2->user_id;
        $surat->status = $surat2->status;

        $surat->save();
        return redirect()->route('surat.historySuratRT');
    }
}
