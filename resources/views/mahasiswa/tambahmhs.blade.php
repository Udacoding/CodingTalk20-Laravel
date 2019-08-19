@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/create" method="POST">
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah</h3>
                    </div>

                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            {{implode('', $errors->all(':message'))}}
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" id="" rows="5" required autofocus></textarea>
                        </div>

                    </div>

                    <div class="card-footer">
                        <a href="/mahasiswa" class="btn btn-default">Kembali</a>
                        <input type="submit" class="pull-right btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

   @endsection