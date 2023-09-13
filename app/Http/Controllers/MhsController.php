<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PDF;

class MhsController extends Controller
{
    public function index(){
        return view('mahasiswa');
    }

    public function surat(){
        return view('cetak_surat');
    }

    public function cetak(Request $request, $nbi){
        $data = Mahasiswa::where('nbi', $nbi)->get();
        $pdf = PDF::loadview('cetak_surat', ['data' => $data]);
        //dd($data);
        return $pdf->stream('surat_permohonan.pdf');
    }
}
