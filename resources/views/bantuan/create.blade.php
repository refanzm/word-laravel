<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Bantuan</title>
</head>
<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Buat Data Bantuan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('bantuan.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label class="font-weight-bold">Email</label>
                    <textarea type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Pemohon">
                    </textarea>
                    <!-- error message untuk isi_berita -->
                    @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Tempat</label>
                    <textarea type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" placeholder="Masukkan Tempat anda saat ini">
                    </textarea>
                    <!-- error message untuk isi_berita -->
                    @error('tempat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Nomor</label>
                    <textarea type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Masukkan Nomor Surat">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('nomor')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Nama Organisasi</label>
                    <textarea type="text" class="form-control @error('nama_organisasi') is-invalid @enderror" name="nama_organisasi" value="{{ old('nama_organisasi') }}" placeholder="Masukkan Nama Organisasi">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('nama_organisasi')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Nama Pemohon</label>
                    <textarea type="text" class="form-control @error('nama_pemohon') is-invalid @enderror" name="nama_pemohon" value="{{ old('nama_pemohon') }}" placeholder="Masukkan Nama Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('nama_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Tempat/Tanggal Lahir</label>
                    <textarea type="text" class="form-control @error('tanggal_lahir_pemohon') is-invalid @enderror" name="tanggal_lahir_pemohon" value="{{ old('tanggal_lahir_pemohon') }}" placeholder="Masukkan Tempat/ Tanggal Lahir Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('tanggal_lahir_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Jenis Kelamin</label>
                    <textarea type="text" class="form-control @error('jenis_kelamin_pemohon') is-invalid @enderror" name="jenis_kelamin_pemohon" value="{{ old('jenis_kelamin_pemohon') }}" placeholder="Masukkan Jenis Kelamin Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('jenis_kelamin_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Agama</label>
                    <textarea type="text" class="form-control @error('agama_pemohon') is-invalid @enderror" name="agama_pemohon" value="{{ old('agama_pemohon') }}" placeholder="Masukkan Agama Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('agama_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pendidikan</label>
                    <textarea type="text" class="form-control @error('pendidikan_pemohon') is-invalid @enderror" name="pendidikan_pemohon" value="{{ old('pendidikan_pemohon') }}" placeholder="Masukkan Pendidikan Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('pendidikan_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Golongan Darah</label>
                    <textarea type="text" class="form-control @error('golongan_darah_pemohon') is-invalid @enderror" name="golongan_darah_pemohon" value="{{ old('golongan_darah_pemohon') }}" placeholder="Masukkan Nomor Surat">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('golongan_darah_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Alamat</label>
                    <textarea type="text" class="form-control @error('alamat_pemohon') is-invalid @enderror" name="alamat_pemohon" value="{{ old('alamat_pemohon') }}" placeholder="Masukkan Alamat Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('alamat_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pekerjaan</label>
                    <textarea type="text" class="form-control @error('pekerjaan_pemohon') is-invalid @enderror" name="pekerjaan_pemohon" value="{{ old('pekerjaan_pemohon') }}" placeholder="Masukkan Pekerjaan Pemohon">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('pekerjaan_pemohon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Keterangan</label>
                    <textarea type="text" class="form-control @error('keterangan_1') is-invalid @enderror" name="keterangan_1" value="{{ old('keterangan_1') }}" placeholder="Masukkan Keterangan">
                    </textarea>
                    <!-- error message untuk Keterangan -->
                    @error('keterangan_1')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>
            </form>
        </div>
    </div>
</body>
</html>
