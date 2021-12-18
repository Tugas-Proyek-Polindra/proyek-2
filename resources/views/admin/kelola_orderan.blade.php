@extends('layouts.template')

@section('title', 'Kelola Orderan')
    
@section('content')

@if (session('pesan'))
<div class="alert alert-success alert-dismissible ">
    <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i>Success:</h4>
    {{session('pesan')}}
</div>     
@endif

<div class="row">
  <div class="col-xs-6">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Semua @yield('title')</h3>
          <div class="box-tools">
              <a href="/produk/kelola_orderan/create" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-plus-square"></i> Tambah Data</a>
          </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Orderan</th>
              <th>Jumlah Orderan</th>
              <th>Keterangan Pcs</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($kelola_orderan as $orderan)
            <tr>
                <td> {{$loop->iteration}} </td>
                <td> {{$orderan->kode_order}} </td>
                <td> {{$orderan->jumlah_orderan}} </td>
                <td> {{$orderan->pcs}} </td>
                <td>
                  <form method="post" action="/produk/kelola_orderan/{{$orderan->id}}" class="form-inline">
                    <a href="/produk/kelola_orderan/{{$orderan->id}}/edit" class="btn btn-sm btn-warning" >Edit</a>
                      @csrf
                      @method('delete')
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$orderan->id}}">Delete</button>
                    </form>                     
                    <div class="modal modal-danger fade" id="delete{{$orderan->id}}">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$orderan->jumlah_orderan}}</h4>
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
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>

{{-- <div class="col-6">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Orderan</th>
                <th>Jumlah Orderan</th>
                <th>Keterangan Pcs</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelola_orderan as $orderan)
            <tr>
                <td> {{$loop->iteration}} </td>
                <td> {{$orderan->kode_order}} </td>
                <td> {{$orderan->jumlah_orderan}} </td>
                <td> {{$orderan->pcs}} </td>
                <td>
                  <form method="post" action="/produk/kelola_orderan/{{$orderan->id}}" class="form-inline">
                    <a href="/produk/kelola_orderan/{{$orderan->id}}/edit" class="btn btn-sm btn-warning" >Edit</a>
                      @csrf
                      @method('delete')
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$orderan->id}}">Delete</button>
                    </form>                     
                    <div class="modal modal-danger fade" id="delete{{$orderan->id}}">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$orderan->jumlah_orderan}}</h4>
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
</div> --}}


@endsection