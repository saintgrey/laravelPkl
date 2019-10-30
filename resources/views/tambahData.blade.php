@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard
            <span class="ml-2 pull-right"><a class="btn btn-primary" href="/tambahBaru">Tambah</a></span>
            </div>

            <div class="card-body">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Jenis Sapi</th>
                <th scope="col">Umur Dalam Bulan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($Sapiis as $row)
                <tr>
                <td scope="row">{{$loop -> iteration}}</td>                   
                <td scope="row">{{$row -> id_jenis_sapi}}</td>
                <td scope="row">{{$row -> umur}}</td>
                <td scope="row">{{$row -> deskripsi}}</td>
                <td scope="row">{{$row -> foto}}</td>
                <td>
                <a href= "{{route('tambahBaru.edit', $row->id)}}" class="badge badge-success">Edit</a>
                 <form method="post" action="{{route('tambahBaru.delete', $row->id)}}" class="d-inline">
                 @method('delete')
                 @csrf
                 <button type= "submit" class="badge badge-danger">Hapus</button>
                 </form>
                </td>

                </tr>
                @endforeach
            </tbody>
            </table>


            </div>
        </div>
    </div>
</div>
</div>
@endsection