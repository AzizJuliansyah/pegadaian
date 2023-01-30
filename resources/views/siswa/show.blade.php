
@extends('layout.main')

@section('konten')
<div>
    <table class="table table-md table-bordered table-striped">
        <thead>
            <tr>
                <th>Berat</th>
                <th>Date</th>
                <th>Foto</th>
                <th>Qr</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    @if ($data->foto)
                        <img style="max-width: 50px;max-height: 50px" src="{{ url('foto').'/'.$data->foto }}"/>
                    @endif
                </td>
                <td>{!! QrCode::size(50)->generate($data->qr_code) !!}</td>
            </tr>
        </tbody>
    </table>
    <a href='/siswa' class="btn btn-secondary">kembali</a>
</div>
@endsection