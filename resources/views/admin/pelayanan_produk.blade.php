@extends('layouts.template')

@section('title', 'Pelayanan Produk')
    
@section('content')


@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible">
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
              <a href="/produk/pelayanan/create" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-plus-square"></i> Tambah Data</a>
          </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Pelayanan</th>
              <th>Kategori</th>
              <th>Harga Satuan</th>
              <th>Action</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($pelayanan_produk as $pelayananProduk)
          <tr>
              <td> {{$loop->iteration}} </td>
              <td> {{$pelayananProduk->kode_pelayanan}} </td>
              <td> {{$pelayananProduk->kategori}} </td>
              <td> {{$pelayananProduk->harga_satuan}} </td>
              <td>
                <form action="/produk/pelayanan/{{$pelayananProduk->id}} " method="POST" class="form-inline">  
                  <a href="/produk/pelayanan/{{$pelayananProduk->id}}/edit " class="btn btn-sm btn-warning" >Edit</a>
                  @csrf
                  @method('DELETE')
                  <button  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$pelayananProduk->id}}">Delete</button>                 
                </form>
                <div class="modal modal-danger fade" id="delete{{$pelayananProduk->id}}">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">{{$pelayananProduk->kategori}}</h4>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda Yakin Ingin Menghapus Data Ini....???</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                          <button type="button" class="btn btn-outline pull-right" >Yes</button>                        
                        {{-- <a href="/pelayanan_produk/delete/{{$pelayananProduk->kode_pelayanan}} " class="btn btn-outline">Yes</a> --}}
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

@endsection