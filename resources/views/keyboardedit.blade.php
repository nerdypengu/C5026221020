@extends('master2')
@section('judulhalaman', 'Keyboard')

@section('konten')
    <h3>Edit Data Keyboard</h3>

    <a class="btn btn-danger mb-md-3 ml-3" href="/keyboard"> Kembali</a>

    <div class="container">
        @foreach ($keyboard as $k)
            <form action="/keyboard/update" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-sm-3">
                        <input type="hidden" name="id" value="{{ $k->kodekeyboard }}"> <br />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="merk" class="control-label col-sm-1">Merk Keyboard</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="merk" name="merk"
                            value="{{ $k->merkkeyboard }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-form-label col-sm-1">Stock</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="stock" name="stock"
                            value="{{ $k->stockkeyboard }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tersedia" class="col-form-label col-sm-1">Tersedia</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="tersedia" name="tersedia"
                            value="{{ $k->tersedia }}">
                    </div>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        @endforeach
    </div>
@endsection
