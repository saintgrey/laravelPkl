@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Data</div>
                <div class="card-body">
                <form method="POST" action="/update/{{$ubah->id}}">
                @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$ubah->name}}" required autocomplete="name" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                        <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$ubah->email}}" required autocomplete="name" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">Pekerjaan</label>
                        <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{$ubah->pekerjaan}}" required autocomplete="name" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                        <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$ubah->alamat}}" required autocomplete="" autofocus>

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   update
                                </button>
                            </div>
                        </div>
                        </form>
                     </div>
                </div>

                      
@endsection