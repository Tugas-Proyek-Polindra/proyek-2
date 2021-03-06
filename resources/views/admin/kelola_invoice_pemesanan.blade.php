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
                    <th>Total Harga</th>
                    <th>Status Pembayaran</th>
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
                <td> @currency($pesan->total_bayar) </td>
                <td> {{$pesan->status_pembayaran}} </td>
                <td> {{Carbon\Carbon::parse($pesan->tgl_pesanan)->toFormattedDateString()}} </td>
                <td> {{Carbon\Carbon::parse($pesan->tgl_deadline)->toFormattedDateString()}} </td>
                <td> <img src="{{asset('storage/' . $pesan->desain)}}" width="100px" alt="{{$pesan->name}}"> </td>
                <td>
                    
                    <form method="post" action="/pemesanan/{{$pesan->id}}" class="form-inline">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-fw fa-file-text"></i>
                        </button>
                        <a href="/pemesanan/{{$pesan->id}}/edit" class="btn btn-sm btn-warning" ><i class="fa fa-fw fa-pencil-square-o"></i></a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$pesan->id}}"><i class="fa fa-fw fa-close"></i></button>
                    </form>                     
                    <div class="modal modal-danger fade" id="delete{{$pesan->id}}">
                        <div class="modal-dialog modal-sm">
                        <div class="modal-cont
                        ent">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$pesan->pelayanan_produk->kategori}}</h4>
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
                        <th width="150px">Jumlah</th>
                        <th width="30px">:</th>
                        <th>{{ $pesan->jumlah_pemesanan }}</th>
                    </tr>
                    <tr>
                        <th width="150px">Total Bayar</th>
                        <th width="30px">:</th>
                        <th>@currency($pesan->total_bayar)</th>
                    </tr>
                    <tr>
                        <th width="150px">Status Pembayaran</th>
                        <th width="30px">:</th>
                        <th>{{ $pesan->status_pembayaran }}</th>
                    </tr>
                    <tr>
                        <th width="150px">Status Pemesanan</th>
                        <th width="30px">:</th>
                        <th>{{ $pesan->status_pemesanan }}</th>
                    </tr>
                    <tr>
                        <th width="150px">Status Barang</th>
                        <th width="30px">:</th>
                        <th>{{ $pesan->status_barang }}</th>
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
                    {{-- <tr>
                        <th width="150px">Jumlah Orderan</th>
                        <th width="30px">:</th>
                        <th>{{ $pesan->kelola_orderan->jumlah_orderan }}</th>
                    </tr> --}}
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
                            <img src="{{asset('storage/' . $pesan->desain)}}" width="200px" alt="{{$pesan->name}}">
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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