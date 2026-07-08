@extends('template.base')

@section('jayla')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="#" class="m-0">Table Data Response</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard Data Response</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <!-- Alert Create -->
                        @if(Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <!-- Alert Delete -->
                        @if(Session::get('Delete'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('Delete') }}
                        </div>
                        @endif
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Aduan</th>
                                    <th>Nama Pengadu</th>
                                    <th>Judul Aduan</th>
                                    <th>Admin Response</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($response as $row)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->dataKomplen->no_aduan }}</td>
                                <td>{{ $row->dataKomplen->namaPengadu->name }}</td>
                                <td>{{ $row->dataKomplen->judul }}</td>
                                <td>{{ $row->namaAdmin->name }}</td>
                                <td>
                                    <a href="" class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#show{{ $row->id }}"><i class="fas fa-eye"></i></a>
                                    @include('Admin.response.show')
                                    <a href="" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    @include('Admin.response.updateResponse')
                                    <a href="" class="btn btn-outline-danger" data-toggle="modal"
                                     data-target="#delete{{ $row->id }}"><i class="fas fa-trash"></i></a>
                                     @include('Admin.response.hapusResponse')
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<!-- modal creaate -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('create.category') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="category" class="form-control" placeholder="Masukkan Data Category !">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection