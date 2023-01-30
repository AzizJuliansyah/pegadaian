@extends('layout.main')

@section('konten')
    
<table class="table table-md table-bordered table-striped">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>QR Code</th>
            <th>Foto</th>
            <th>Nomor Telepon</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th class="md-3">Aksi</th>
        </tr>
    </thead>

    
    
    <tbody>
        @foreach ($data as $item)
        <tr>
                <td>{{ $item->created_at }}</td>
                <td>
                    {!! QrCode::size(50)->generate($item->qr_code) !!}
                    <a href="{{ route('qrcode.download') }}" class="nav-icon fas fa-download"></a>
                    
                </td>
                <td>
                    @if ($item->foto)
                        <img style="max-width: 50px;max-height: 50px" src="{{ url('foto').'/'.$item->foto }}"/>
                    @endif
                </td>
                <td>{{ $item->nomor_induk}}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->alamat}}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection