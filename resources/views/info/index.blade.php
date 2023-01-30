@extends('layout.main')

@section('konten')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" />
    </head>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pelanggan</h3>
    </div>
    <div class="card-tools">
   <table class="table table-md table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>berat</th>
            <th>Date</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>

    
    
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{!! QrCode::size(50)->generate($data[0]->qr_code) !!}</td>
                
                <td>{{ $item->nomor_induk}}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->created_at }}</td>
                
            </tr>
        @endforeach
    </tbody>
   </table>
   
</div>
</div>
</div>
</html>

@endsection