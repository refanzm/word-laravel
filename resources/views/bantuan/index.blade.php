@extends('layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bantuan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div>
                        <a href="{{ route('bantuan.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button></a>
                    </div>
                    <div>
                        <a href="" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button></a>
                    </div>
                    <br>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Tempat</th>
                            <th>Nomor</th>
                            <th>Nama Organisasi</th>
                            <th>Nama Pemohon</th>
                            <th>Tanggal Lahir Pemohon</th>
                            <th>Jenis Kelamin Pemohon</th>
                            <th>Agama Pemohon</th>
                            <th>Pendidikan Pemohon</th>
                            <th>Golongan Darah Pemohon</th>
                            <th>Alamat Pemohon</th>
                            <th>Pekerjaan Pemohon</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bantuan as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->email }}</td>
                            <td>{{ $b->tempat }}</td>
                            <td>{{ $b->nomor }}</td>
                            <td>{{ $b->nama_organisasi }}</td>
                            <td>{{ $b->nama_pemohon }}</td>
                            <td>{{ $b->tanggal_lahir_pemohon }}</td>
                            <td>{{ $b->jenis_kelamin_pemohon }}</td>
                            <td>{{ $b->agama_pemohon }}</td>
                            <td>{{ $b->pekerjaan_pemohon }}</td>
                            <td>{{ $b->alamat_pemohon }}</td>
                            <td>{{ $b->pekerjaan_pemohon }}</td>
                            <td>{{ $b->keterangan_1 }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bantuan.destroy', $b->id) }}" method="POST">
                                    <a href="{{ route('bantuan.edit', $b->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    <div class="card-footer text-end">
                                        <button type="button" class="btn btn-primary" onclick="cetakSurat()">Cetak Bantuan</button>
                                            <script>
                                                function cetakSurat() {
                                                // Menggunakan JavaScript untuk mendapatkan URL cetak dari elemen dengan ID yang sesuai
                                                var bantuanId = <?php echo $b->id; ?>; // Ini jika Anda ingin menyisipkan variabel PHP ke dalam JavaScript
                                                var cetakUrl = '/cetak_surat/' + bantuanId;

                                                // Pindahkan halaman ke URL cetak
                                                window.location.href = cetakUrl;
                                                }
                                            </script>

                                    </div>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Berita belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
