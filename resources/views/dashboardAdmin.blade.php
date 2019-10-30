@extends('layouts.app')

@section('content')
<div class="container">
@if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif()
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                    <td scope="row">{{$loop -> iteration}}</td>                   
                    <td scope="row">{{$user -> name}}</td>
                    <td scope="row">{{$user -> email}}</td>
                    <td scope="row">{{$user -> pekerjaan}}</td>
                    <td scope="row">{{$user -> alamat}}</td>
                    <td>
                     <a href= "/pindah/{{$user -> id}}" class="badge badge-success">Edit</a>
                     <form method="post" action="/delete/{{$user -> id}}" class="d-inline">
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