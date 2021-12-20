@extends('layouts.template')

@section('title', 'Invoice Pemesanan')   
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
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Kategori</th>
                        <th>Jenis Kain</th>
                        <th>Jumlah Orderan</th>
                        <th>Tgl Pesanan</th>
                        <th>Tgl Deadline</th>
                        <th>Desain</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($pemesanan as $pesan)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td> {{$pesan->kode_pemesanan}} </td>
                    <td> {{$pesan->pelayanan_produk->kategori}} </td>
                    <td> {{$pesan->kelola_kain->nama_kain}} </td>
                    <td> {{$pesan->kelola_orderan->jumlah_orderan}} </td>
                    <td> {{Carbon\Carbon::parse($pesan->tgl_pesanan)->toFormattedDateString()}} </td>
                    <td> {{Carbon\Carbon::parse($pesan->tgl_deadline)->toFormattedDateString()}} </td>
                    <td> <img src="{{asset('storage/' . $pesan->desain)}}" width="100px" alt="{{$pesan->name}}"> </td>
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
                    <h4 class="modal-title">Detail Pesanan</h4>
                    </div>
                    <div class="modal-body">
                    <table class="table table-hover">
                        <tr>
                            <th width="150px">Kode Pemesanan</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->kode_pemesanan }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->user->name }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Alamat</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->user->alamat }}</th>
                        </tr>
                        <tr>
                            <th width="150px">No Handphone</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->user->no_hp }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Email</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->user->email }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Kategori</th>
                            <th width="30px">:</th>
                           <th>{{ $pesan->pelayanan_produk->kategori }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Jenis Kain</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->kelola_kain->nama_kain }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Jumlah Orderan</th>
                            <th width="30px">:</th>
                            <th>{{ $pesan->kelola_orderan->jumlah_orderan }}</th>
                        </tr>
                        <tr>
                            <th width="150px">Tgl Pesanan</th>
                            <th width="30px">:</th>
                            <th>{{Carbon\Carbon::parse($pesan->tgl_pesanan)->toFormattedDateString()}}</th>
                        </tr>
                        <tr>
                            <th width="150px">Tgl Deadline</th>
                            <th width="30px">:</th>
                            <th>{{Carbon\Carbon::parse($pesan->tgl_deadline)->toFormattedDateString()}}</th>
                        </tr>
                        <tr>
                            
                            <th width="150px">Desain</th>
                            <th width="30px">:</th>
                            <th>
                                <img src="{{asset('storage/' . $pesan->desain)}}" width="400px" alt="{{$pesan->name}}">
                            </th>                         
                        </tr>
                        <tr>
                            <th width="150px">Deskripsi</th>
                            <th width="30px">:</th>
                            <th>{{$pesan->deskripsi}}</th>
                        </tr>
                    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>

                <!-- /.modal-dialog -->
        </div>
            <!-- /.modal -->
            
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


@endsection