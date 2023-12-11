@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')

@section('konten')
    <h3>View Mahasiswa</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                @foreach ($mahasiswa as $m)
                    <table class="table table-borderless">
                        <tr>
                            <td>NRP</td>
                            <td>{{ $m->NRP }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $m->Nama }}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>{{ $m->Jurusan }}</td>
                        </tr>
                        <tr>
                            <td>IPK</td>
                            <td>{{ $m->IPK }}</td>
                        </tr>
                    </table>
                @endforeach
                </br>

                <a href="/mahasiswa" class="btn btn-primary"> Ok</a>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

@endsection
