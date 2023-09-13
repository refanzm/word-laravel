@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" class="card border-success mb-10">
                        <div class="card-body">
                            @csrf
                            <div class="mb-1">
                                <label for="" class="form-label fs-20">Email</label>
                                <input type="text" name="email" id="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" placeholder="masukkan email...">
                                @error('nbi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer text-end bg-success">
                            <button type="button" class="btn btn-primary"><a onclick="this.href='/cetak_surat/'+ document.getElementById('email').value" style="text-decoration-color: black">Cetak Bantuan</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
