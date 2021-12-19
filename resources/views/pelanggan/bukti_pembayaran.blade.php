@extends('layouts.template')

@section('title', 'Bukti Pembayaran')
    
@section('content')



@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
   <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
   <h4><i class="icon fa fa-check"></i>Success:</h4>
   {{session('pesan')}}
</div>     
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Semua @yield('title')</h3>
            <div class="box-tools">
              <a href="/pelanggan-buktibayar/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>Kode</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Status Bayar</th>
                  <th>Bukti Bayar</th>
              </tr>
            </thead>
        <tbody>
              @foreach ($kelola_buktibayar as $buktibayar)
              <tr>
                <td> {{$buktibayar->kode_buktibayar}} </td>
                <td> {{$buktibayar->user->name}} </td>
                <td> {{$buktibayar->user->alamat}} </td>
                <td> {{$buktibayar->user->no_hp}} </td>
                <td> {{$buktibayar->user->email}} </td>
                <td> {{$buktibayar->status_bayar}} </td>
                <td> {{$buktibayar->validasi_pembayaran}} </td>
                <td>
                  <form method="post" action="/bukti-bayar/{{$buktibayar->id}}" class="form-inline">
                    <a href="/bukti-bayar/{{$buktibayar->id}}" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-file-text"></i></a>
                    <a href="/bukti-bayar/{{$buktibayar->id}}/edit" class="btn btn-sm btn-warning" ><i class="fa fa-fw fa-pencil-square-o"></i></a>
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$buktibayar->id}}"><i class="fa fa-fw fa-close"></i></button>
                </form>
                <div class="modal modal-danger fade" id="delete{{$buktibayar->id}}">
                  <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">{{$buktibayar->name}}</h4>
                      </div>
                      <div class="modal-body">
                      <p>Apakah Anda Yakin Ingin Menghapus Data Ini....???</p>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                      <button type="button" class="btn btn-outline pull-right">Yes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>                 
                </td>
              </tr>
            @endforeach
        </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection