<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Models\Bantuan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function surat(){
        return view('cetak_surat');
    }

    public function cetak(Request $request, $email){
        $bantuan = Bantuan::where('email', $email)->get();
        $pdf = PDF::loadview('bantuan.cetak', ['data' => $bantuan]);
        //dd($data);
        return $pdf->stream('surat_permohonan.pdf');
    }
}
