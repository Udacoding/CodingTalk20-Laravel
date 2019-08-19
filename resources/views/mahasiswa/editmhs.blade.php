@extends('master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/mahasiswa/update/{{$mahasiswa->id}}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Mahasiswa</h3>
                        </div>
                    </div>

                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            {{implode('', $errors->all(':message'))}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">NIM</label>
                    <input type="text" name="nim" value="{{$mahasiswa->nim}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Nama</label>
                    <input type="text" name="nama" value="{{$mahasiswa->nama}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Jurusan</label>
                    <input type="text" name="jurusan" value="{{$mahasiswa->jurusan}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                    <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control">
                    </div>
                
            </div>
            <div class="card-footer">
                <a href="/mahasiswa" class="btn btn-default">Kembali</a>
                <input type="submit" value="Update Data" class="pull-right btn btn-warning">
            </div>
            </form>
        </div>
    </div>
</div>
@endsection