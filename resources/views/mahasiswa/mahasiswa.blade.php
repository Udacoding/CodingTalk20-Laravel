@extends('master')
@section('content')
      <div class="container">
    <div class="card">

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif

    <div class="card-header" style="border-top: 3px solid #1E90FF">

        <div class="row col-md-12">
            <div class="col-md-6">
                <h3 class="card-title">Mahasiswa</h4>
            </div>

        </div>

        <div class="card-tools">
            <a href="/tambah" class="btn btn-sm btn-primary pull-right">
                <i class="fa fa-plus nav-icon"></i>
                &nbsp; Add
            </a>
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered">
            <thead>
                <tr style="background-color:#1E90FF ">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th width="9%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                @foreach($mahasiswa as $p)
                <?php $no++; ?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$p->nim}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->jurusan}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>
                        <div class="btn-group">

                            <!-- URL::to('/admin/category/detail.id='.$cate-id -->
                            <a href="" class="btn btn-info btn-sm">
                                <i class="fa fa-info-circle nav-icon"></i>
                            </a>

                            <a href="/mahasiswa/edit/{{$p->id}}" class="btn btn-warning  btn-sm">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>

                            <a onClick="return confirm('Yakin ingin menghapus data?')" href="/mahasiswa/{{$p->id}}/delete" class="btn btn btn-danger btn-sm">
                                <i class="fa fa-trash nav-icon"></i>
                            </a>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection