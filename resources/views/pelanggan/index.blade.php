@extends('layouts.app')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Pelanggan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> Data Pelanggan</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ url('pelanggan/create')}}"> Tambah Data </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th><b>No.</b></th>
            <th>Nama Pelanggan</th>
            <th >Id Golongan</th>
            <th>Alamat</th>
            <th>HP</th>
            <th>KTP</th>
            <th>Seri</th>
            <th >Meteran</th>
            <th >Aktif</th>
            <th >Id User</th>
            <th>Created At</th>


            <th width="210px">Action</th>
        </tr>
      </thead>
<?php $no=1;
?>
         @foreach ($rows as $row)
            <tr>
                <td ><b> <?= $no++; ?><b></td>
                <td>{{ $row->pel_nama}}</td>
                <td>{{ $row->pel_id_gol}}</td>
                <td>{{ $row->pel_alamat}}</td>
                <td>{{ $row->pel_hp}}</td>
                <td>{{ $row->pel_ktp}}</td>
                <td>{{ $row->pel_seri}}</td>
                <td>{{ $row->pel_meteran}}</td>
                <td>{{ $row->pel_aktif}}</td>
                <td>{{ $row->pel_id_user}}</td>
                <td>{{ $row->created_at}}</td>                                  

                <td>
            <a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a>
                    
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
                        </form>                </td>
            </tr>
        @endforeach
    </table>

    </div>
    </body>

</html>

@endsection