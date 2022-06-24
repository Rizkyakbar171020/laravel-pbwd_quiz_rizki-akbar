@extends('layouts.app')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Golongan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> Data Golongan</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ url('golongan/create')}}"> Tambah Data </a>
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
            <th width="40px"><b>No.</b></th>
                <td>Kode Golongan</td>
                <td>Nama Golongan</td>
            <th width="210px">Action</th>
        </tr>
      </thead>
<?php $no=1;
?>
         @foreach ($rows as $row)
            <tr>
                <td><b> <?= $no++; ?><b></td>
                    <td>{{ $row->gol_kode }}</td>
                    <td>{{ $row->gol_nama }}</td>
                <td>
            <a href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a>
                    
                        <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
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