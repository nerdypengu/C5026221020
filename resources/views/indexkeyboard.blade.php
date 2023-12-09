@extends('master2')
@section('judulhalaman', 'Data Keyboard')

@section('konten')
    <h3>Keyboard</h3>

    <a href="/keyboard/tambah" class="btn btn-primary mb-3">+ Tambah</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Keyboard</th>
            <th>Merk Keyboard</th>
            <th>Stock Keyboard</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>
        @foreach ($keyboard as $k)
            <tr>
                <td>{{ $k->kodekeyboard }}</td>
                <td>{{ $k->merkkeyboard }}</td>
                <td>{{ $k->stockkeyboard }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>
                    <a href="/keyboard/edit/{{ $k->kodekeyboard }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/keyboard/hapus/{{ $k->kodekeyboard }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
