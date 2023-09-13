

  <!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Pernyataan</title>
    <style>
        @page {
            width: 21cm;
            min-height: 29.7cm;
        }

        #judul{
            text-align: center;
        }

        #halaman{
            width: auto;
            height: auto;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
        }

        #top_surat{
            width: auto;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <div id="halaman">
        <table id="top_surat">
            <tr>
                <td><center>
                    <font size='4'> Teknik Informatika</font><br>
                    <font size='5'> POLITEKNIK NEGERI MALANG</font><br>
                    <font size='2'> Jl. Soekarno Hatta No.45 Kota Malang</font><br>
                </center>
                </td>
            </tr>
            <tr>
                <td colspan="7"><hr></td>
            </tr>
        </table>

        <table>
            <center>
                <font size='4'>SURAT KETERANGAN AKTIF KULIAH</font>
            </center>
        </table>

        <table>
            <tr>
                <td>Yang bertanda tangan di bawah ini :</td>
            </tr>

            <table width="350">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Mr Moon</td>
                </tr>

                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>Kaprodi Teknik Informatika</td>
                </tr>
            </table>

            <tr>
                <td>Menyatakan dengan sebenarnya bahwa :</td>
            </tr>
        </table>

        <table width="260">
            @foreach ($data as $d)
            <tr>
                <td>NBI</td><br>
                <td>:</td>
                <td>{{$d->nbi}}</td>
            </tr>
            <tr>
                <td>Nama</td><br>
                <td>:</td>
                <td>{{$d->nama}}</td>
            </tr>
            <tr>
                <td>Angkatan</td><br>
                <td>:</td>
                <td>{{$d->angkatan}}</td>
            </tr>
            @endforeach
        </table><br>

        <table>
            <tr>
                <td>Adalah benar Mahasiswa Aktif Politeknik Negeri Malang</td>
            </tr>
        </table><br>

        <div style="width: 30%; text-align: left; float:right;">
            Malang, 6 September 2023 <br>
            Yang Bertanda Tangan,
        </div>
        <br><br><br><br><br>
        <div style="width: 32%; text-align: left; float: right;">Kaprodi Teknik Informatika</div>
    </div>
</body>
</html>




