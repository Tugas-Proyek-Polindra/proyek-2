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
              <a href="/pelanggan-buktibayar/create" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-plus-square"></i> Tambah Data</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Status Bayar</th>
                  <th>Validasi Bayar</th>
                  <th>Bukti Bayar</th>
              </tr>
            </thead>
        <tbody>
              @foreach ($bukti_pembayaran as $buktibayar)
              <tr>
                <td> {{$buktibayar->kode_buktibayar}} </td>
                <td> {{$buktibayar->user->name}} </td>
                <td> {{$buktibayar->user->alamat}} </td>
                <td> {{$buktibayar->user->no_hp}} </td>
                <td> {{$buktibayar->user->email}} </td>
                <td> {{$buktibayar->status_bayar}} </td>
                <td> {{$buktibayar->validasi_pembayaran}} </td>
                <td><img src="{{asset('storage/' . $buktibayar->bukti)}}" height="50px" alt="{{$buktibayar->name}}"></td>
                <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-fw fa-file-text"></i>
                  </button>
                </td>
              </tr>
            @endforeach
        </tbody>
          </table>

          <div class="modal modal-default fade" id="modal-default">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Detail Bukti Bayar</h4>
              </div>
              <div class="modal-body">
              <table class="table table-hover">
                    <tr>
                        <th width="150px">Kode</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->kode_buktibayar }}</th>
                    </tr>
                    {{-- <tr>
                        <th width="150px">Kode Pemesanan</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->kode_buktibayar }}</th>
                    </tr>
                    <tr>
                      <th width="150px">Pelayanan Produk</th>
                      <th width="30px">:</th>
                      <th>{{ $buktibayar->pelayanan_produk->kategori }}</th>
                    </tr> --}}
                    <tr>
                        <th width="150px">Nama</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->user->name }}</th>
                    </tr>
                    <tr>
                        <th width="150px">Alamat</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->user->alamat }}</th>
                    </tr>
                    <tr>
                        <th width="150px">No Handphone</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->user->no_hp }}</th>
                    </tr>
                    <tr>
                        <th width="150px">Email</th>
                        <th width="30px">:</th>
                        <th>{{ $buktibayar->user->email }}</th>
                    {{-- </tr>
                    <tr>
                        <th width="150px">Tgl Pesanan</th>
                        <th width="30px">:</th>
                        <th>{{Carbon\Carbon::parse($buktibayar->tgl_pesanan)->toFormattedDateString()}}</th>
                    </tr>
                    <tr>
                        <th width="150px">Tgl Deadline</th>
                        <th width="30px">:</th>
                        <th>{{Carbon\Carbon::parse($buktibayar->tgl_deadline)->toFormattedDateString()}}</th>
                    </tr> --}}
                    <tr>
                      <th width="150px">Status Bayar</th>
                      <th width="30px">:</th>
                      <th>{{$buktibayar->status_bayar}}</th>
                    </tr>
                    <tr>
                      <th width="150px">Validasi Bayar</th>
                      <th width="30px">:</th>
                      <th>{{$buktibayar->validasi_pembayaran}}</th>
                    </tr>
                    <tr>                       
                        <th width="150px">Bukti Bayar</th>
                        <th width="30px">:</th>
                        <th>
                          <a href="{{asset('storage/' . $buktibayar->bukti)}}">
                            <img src="{{asset('storage/' . $buktibayar->bukti)}}" height="200px" alt="{{$buktibayar->name}}">
                          </a>                            
                        </th>                         
                    </tr>                   
                    <tr>
                        <th width="150px">Validasi</th>
                        <th width="30px">:</th>
                        <th>{{$buktibayar->status_bayar}}</th>
                    </tr>
              </table>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-success">Save Close</button> --}}
              </div>
            </div>
            <!-- /.modal-content -->
          </div>


        </div>
      </div>
    </div>
  </div>

@endsection