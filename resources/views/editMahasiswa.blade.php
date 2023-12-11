@extends('master2')
@section('judulhalaman', 'Data Mahasiswa')

@section('konten')
    <h3>Edit Mahasiswa</h3>

    <a class="btn btn-danger mb-md-3 ml-3" href="/mahasiswa"> Kembali</a>

    <div class="container">
        @foreach ($mahasiswa as $m)
            <form action="/mahasiswa/update" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-3">
                        <input type="hidden" name="nrp" value="{{ $m->NRP }}"> <br />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="control-label col-sm-1">Nama</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $m->Nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class="col-form-label col-sm-1">Jurusan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="jurusan" name="jurusan"
                            value="{{ $m->Jurusan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-form-label col-sm-1">IPK</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="ipk" name="ipk"
                            value="{{ $m->IPK }}">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        @endforeach
    </div>
@endsection
