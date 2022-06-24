@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data pelanggan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Data Pelanggan</h3>
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
         z   </div>
        @endif
        
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="pel_id_gol" class="col-sm-2 col-form-label">ID Golongan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_id_gol" class="form-control" id="pel_id_gol" value="{{ $row->pel_id_gol }}" placeholder="ID Golongan">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_nama" class="form-control" id="pel_nama" value="{{ $row->pel_nama }}" placeholder="Nama pelanggan">
                </div>
            </div>            

            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_alamat" class="form-control" id="pel_alamat" value="{{ $row->pel_alamat }}" placeholder="Alamat pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">NO HP</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_hp" class="form-control" id="pel_hp" value="{{ $row->pel_hp }}" placeholder="HP pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">KTP</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_ktp" class="form-control" id="pel_ktp" value="{{ $row->pel_ktp }}" placeholder="KTP pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">NO Seri</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_seri" class="form-control" id="pel_seri" value="{{ $row->pel_seri }}" placeholder="No Seri pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">NO Meteran</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_meteran" class="form-control" id="pel_meteran" value="{{ $row->pel_meteran }}" placeholder="Meteran pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Status Aktif</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_aktif" class="form-control" id="pel_aktif" value="{{ $row->pel_aktif }}" placeholder="Aktif">
                </div>
            </div>   
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-2 col-form-label">Id User Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="pel_id_user" class="form-control" id="pel_id_user" value="{{ $row->pel_id_user }}" placeholder="Aktif">
                </div>
            </div>                                                                     
             <hr>
                <div class="form-group">
                    <a href="{{url('pelanggan')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection