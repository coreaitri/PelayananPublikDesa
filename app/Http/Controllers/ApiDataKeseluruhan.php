<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class ApiDataKeseluruhan extends Controller
{
    public function index()
    {
        $data = [
            'warga' => Warga::all(),

        ];

        return response()->json($data, 200);
    }
}
