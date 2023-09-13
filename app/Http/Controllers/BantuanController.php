<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use Illuminate\Http\Request;
use PDF;

class BantuanController extends Controller
{
    public function index(){
        $bantuan = Bantuan::latest()->get();
        return view('bantuan.index', compact('bantuan'));
    }

    public function create()
    {
        $bantuan = Bantuan::count();

        return view('bantuan.create', compact('bantuan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'             => 'required',
            'tempat'            => 'required',
            'nomor'             => 'required',
            'nama_organisasi'   => 'required',
            'nama_pemohon'      => 'required',
            'tanggal_lahir_pemohon' => 'required',
            'jenis_kelamin_pemohon' => 'required',
            'agama_pemohon' => 'required',
            'pendidikan_pemohon' => 'required',
            'golongan_darah_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'pekerjaan_pemohon' => 'required',
            'keterangan_1' => 'required',
        ]);

        $bantuan = Bantuan::create([
            'email'             => $request-> email,
            'tempat'            => $request-> tempat,
            'nomor'             => $request-> nomor,
            'nama_organisasi'   => $request-> nama_organisasi,
            'nama_pemohon'      => $request-> nama_pemohon,
            'tanggal_lahir_pemohon' => $request-> tanggal_lahir_pemohon,
            'jenis_kelamin_pemohon' => $request-> jenis_kelamin_pemohon,
            'agama_pemohon' => $request-> agama_pemohon,
            'pendidikan_pemohon' => $request-> pendidikan_pemohon,
            'golongan_darah_pemohon' => $request-> golongan_darah_pemohon,
            'alamat_pemohon' => $request-> alamat_pemohon,
            'pekerjaan_pemohon' => $request-> pekerjaan_pemohon,
            'keterangan_1' => $request-> keterangan_1,
        ]);

        if ($bantuan) {
            //redirect dengan pesan sukses
            return redirect()->route('bantuan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('bantuan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Bantuan $bantu)
    {
        $bantuan = Bantuan::count();

        return view('bantuan.edit', compact('bantu', 'bantuan'));
    }

    public function update(Request $request, Bantuan $bantu)
    {
        $this->validate($request, [
            'email'             => 'required',
            'tempat'            => 'required',
            'nomor'             => 'required',
            'nama_organisasi'   => 'required',
            'nama_pemohon'      => 'required',
            'tanggal_lahir_pemohon' => 'required',
            'jenis_kelamin_pemohon' => 'required',
            'agama_pemohon' => 'required',
            'pendidikan_pemohon' => 'required',
            'golongan_darah_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'pekerjaan_pemohon' => 'required',
            'keterangan_1' => 'required',
        ]);

        //get data Berita by ID
        $bantu = Bantuan::findOrFail($bantu->id);

        if ($request->file('gambar_berita') == "") {

            $bantu->update([
                'email'             => $request-> email,
                'tempat'            => $request-> tempat,
                'nomor'             => $request-> nomor,
                'nama_organisasi'   => $request-> nama_organisasi,
                'nama_pemohon'      => $request-> nama_pemohon,
                'tanggal_lahir_pemohon' => $request-> tanggal_lahir_pemohon,
                'jenis_kelamin_pemohon' => $request-> jenis_kelamin_pemohon,
                'agama_pemohon' => $request-> agama_pemohon,
                'pendidikan_pemohon' => $request-> pendidikan_pemohon,
                'golongan_darah_pemohon' => $request-> golongan_darah_pemohon,
                'alamat_pemohon' => $request-> alamat_pemohon,
                'pekerjaan_pemohon' => $request-> pekerjaan_pemohon,
                'keterangan_1' => $request-> keterangan_1,
            ]);
        } else {

            $bantu->update([
                'email'             => $request-> email,
                'tempat'            => $request-> tempat,
                'nomor'             => $request-> nomor,
                'nama_organisasi'   => $request-> nama_organisasi,
                'nama_pemohon'      => $request-> nama_pemohon,
                'tanggal_lahir_pemohon' => $request-> tanggal_lahir_pemohon,
                'jenis_kelamin_pemohon' => $request-> jenis_kelamin_pemohon,
                'agama_pemohon' => $request-> agama_pemohon,
                'pendidikan_pemohon' => $request-> pendidikan_pemohon,
                'golongan_darah_pemohon' => $request-> golongan_darah_pemohon,
                'alamat_pemohon' => $request-> alamat_pemohon,
                'pekerjaan_pemohon' => $request-> pekerjaan_pemohon,
                'keterangan_1' => $request-> keterangan_1,
            ]);
        }

        if ($bantu) {
            //redirect dengan pesan sukses
            return redirect()->route('bantuan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('bantuan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        $bantuan->delete();

        if ($bantuan) {
            //redirect dengan pesan sukses
            return redirect()->route('bantuan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('bantuan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function surat(){
        $bantuan = Bantuan::latest()->get();
        return view('bantuan.cetak_surat', compact('bantuan'));
    }

    public function cetak(Request $request, $id){
        $bantuan = Bantuan::where('email', $id)->get();
        $pdf = PDF::loadview('bantuan.cetak_surat', ['data' => $bantuan]);
        //dd($data);
        return $pdf->stream('surat_permohonan.pdf');
    }
}
