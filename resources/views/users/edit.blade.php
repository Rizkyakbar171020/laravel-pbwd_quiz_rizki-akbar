@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data User</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Data Users</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ url('/users/' . $row->users_id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_nama" class="form-control" id="kode" value="{{ $row->user_nama }}" placeholder="Nama User">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Email User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_email" class="form-control" id="kode" value="{{ $row->user_email }}" placeholder="Email User">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Alamat User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_alamat" class="form-control" id="kode" value="{{ $row->user_alamat }}" placeholder="Alamat User">
                </div>
            </div>   
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">HP User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_hp" class="form-control" id="kode" value="{{ $row->user_hp }}" placeholder="Hp User">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Pos User</label>
                <div class="col-sm-10">
                    <input type="text" name="user_pos" class="form-control" id="kode" value="{{ $row->user_pos }}" placeholder="Pos User">
                </div>
            </div> 
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <input type="text" name="user_role" class="form-control" id="kode" value="{{ $row->user_role }}" placeholder="role User">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Status Aktif</label>
                <div class="col-sm-10">
                    <input type="text" name="user_aktif" class="form-control" id="kode" value="{{ $row->user_aktif }}" placeholder="Aktif User">
                </div>
            </div>                                                        
             <hr>
                <div class="form-group">
                    <a href="{{url('users')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection