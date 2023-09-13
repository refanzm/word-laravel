<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    <style>
        .card{
            width: 400px;
            height: 200px;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 300px;
            background-color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="">Teknik Informatika Politeknik Negeri Malang</a>
            <div class="collapse navbar-collapse" id="navbarNav">
            </div>
        </div>
    </nav>

    <div class="col-md-3 col-lg-6">
        <form method="post" class="card border-danger mb-10">
            <div class="card-body">
                @csrf
                <div class="mb-1">
                    <label for="" class="form-label fs-20">NIM</label>
                    <input type="text" name="nbi" id="nbi" value="{{ old('nbi') }}"
                    class="form-control @error('nbi') is-invalid @enderror" placeholder="masukkan nim...">
                    @error('nbi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="card-footer text-end bg-danger">
                <button type="button" class="btn btn-primary"><a onclick="this.href='/cetak_suratpdf/'+ document.getElementById('id').value" style="text-decoration-color: black">Cetak Bantuan</a></button>
            </div>
        </form>
    </div>
</body>
</html>
