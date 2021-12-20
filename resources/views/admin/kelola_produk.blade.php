@extends('layouts.template')

@section('title', 'Produk')
    
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
                <a href="/produk/create" class="btn btn-primary btn-sm me-5"><i class="fa fa-fw fa-plus-square"></i>Tambah Data</a>
                {{-- <a href="#" target="_blank" class="btn btn-primary btn-sm">Print to Printer</a>
                <a href="#" target="_blank" class="btn btn-success btn-sm">Print to PDF</a> <br> --}}
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Kode Produk</th>
                  {{-- <th>Nama Produk</th> --}}
                  <th>Kategori</th>
                  <th>Nama Kain</th>
                  <th>Ukuran</th>
                  <th>Model</th>
                  <th>Desain</th>
                  <th>Example</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kelola_produk as $kelolaProduk)
              <tr>
                  <td> {{$loop->iteration}} </td>
                  <td> {{$kelolaProduk->kode_produk}} </td>
                  <td> {{$kelolaProduk->nama_produk}} </td>
                  {{-- <td> {{$kelolaProduk->pelayanan_produk->kategori}} </td> --}}
                  <td> {{$kelolaProduk->kelola_kain->nama_kain}} </td>
                  <td> {{$kelolaProduk->ukuran}} </td>
                  <td> {{$kelolaProduk->model}} </td>
                  <td> {{$kelolaProduk->desain}} </td>
                  <td><img src="{{asset('storage/' . $kelolaProduk->img)}}" height="50px" alt="{{$kelolaProduk->nama_produk}}"></td>
                  {{-- <td><img src="{{asset('storage/' . $buktibayar->bukti)}}" height="50px" alt="{{$buktibayar->name}}"></td> --}}

                  <td>                                        
                      <form method="post" action="/produk/{{$kelolaProduk->id}}" class="form-inline">
                          <a href="/produk/{{$kelolaProduk->id}}" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-file-text"></i></a>
                          <a href="/produk/{{$kelolaProduk->id}}/edit" class="btn btn-sm btn-warning" ><i class="fa fa-fw fa-pencil-square-o"></i></a>
                          @csrf
                          @method('delete')
                          <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$kelolaProduk->id}}"><i class="fa fa-fw fa-close"></i></button>    
                      </form>           
                        <div class="modal modal-danger fade" id="delete{{$kelolaProduk->id}}">
                          <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">{{$kelolaProduk->nama_produk}}</h4>
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

@endsection