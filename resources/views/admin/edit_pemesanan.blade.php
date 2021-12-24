@extends('layouts.template')
@section('title', 'Edit Invoice Pemesanan')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit @yield('title')</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="/pemesanan/{{$pemesanan->id}}"  enctype="multipart/form-data" >
        @method('put')
        @csrf
        <div class="box-body">
            <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>

            <div class="form-group">
                <label for="kode_pemesanan">Kode Pemesanan</label>
                <input name="kode_pemesanan" class="form-control" value="{{old('kode_pemesanan', $pemesanan->kode_pemesanan)}}" readonly>
                <div class="text-danger">
                    @error('kode_pemesanan')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran</label>
                <select name="status_pembayaran" id="combobox" class="form-control">
                        <option value="ongoing" {{$pemesanan ? ($pemesanan->status_pembayaran == "ongoing" ? 'selected' : "") : "" }}>ongoing</option>
                        <option value="lunas" {{$pemesanan ? ($pemesanan->status_pembayaran == "lunas" ? 'selected' : "") : "" }}>lunas</option>
                        <option value="pending" {{$pemesanan ? ($pemesanan->status_pembayaran == "pending" ? 'selected' : "") : "" }}>pending</option>
                </select>     
            </div>

            <div class="form-group">
                <label for="status_pemesanan">Status Pemesanan</label>
                <select name="status_pemesanan" id="combobox" class="form-control">
                        <option value="onproses" {{$pemesanan ? ($pemesanan->status_pemesanan == "onproses" ? 'selected' : "") : "" }}>onproses</option>
                        <option value="selesai" {{$pemesanan ? ($pemesanan->status_pemesanan == "selesai" ? 'selected' : "") : "" }}>selesai</option>
                        <option value="pending" {{$pemesanan ? ($pemesanan->status_pemesanan == "pending" ? 'selected' : "") : "" }}>pending</option>
                </select>     
            </div>

            <div class="form-group">
                <label for="status_barang">Status Barang</label>
                <select name="status_barang" id="combobox" class="form-control">
                        <option value="onproses" {{$pemesanan ? ($pemesanan->status_barang == "onproses" ? 'selected' : "") : "" }}>onproses</option>
                        <option value="diterima" {{$pemesanan ? ($pemesanan->status_barang == "diterima" ? 'selected' : "") : "" }}>diterima</option>
                        <option value="pending" {{$pemesanan ? ($pemesanan->status_barang == "pending" ? 'selected' : "") : "" }}>pending</option>
                </select>     
            </div>


            <div class="form-group">
                <label for="name">Nama</label>
                <input name="name" class="form-control" value="{{Auth::user()->name}}" readonly>
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                    <input name="alamat" class="form-control" value="{{Auth::user()->alamat}}" readonly>
                    <div class="text-danger">
                    @error('alamat')
                    {{$message}}
                    @enderror
                    </div>               
            </div>
            <div class="form-group">
                <label for="no_hp">Handphone</label>
                <input name="no_hp" class="form-control" value="{{Auth::user()->no_hp}}" readonly>
                    <div class="text-danger">
                    @error('no_hp')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" value="{{Auth::user()->email}}" readonly>
                    <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="pelayanan_produk_id" class="form-control">
                    @foreach ($pelayanan_produk as $pelayananProduk)     
                        @if (old('pelayanan_produk_id', $pemesanan->pelayanan_produk_id) == $pelayananProduk->id )
                        <option value="{{$pelayananProduk->id}}" selected>{{$pelayananProduk->kategori}}</option>
                        @else                       
                        <option value="{{$pelayananProduk->id}}">{{$pelayananProduk->kategori}}</option>
                        @endif                       
                    @endforeach
                </select>                
            </div>

            <div class="form-group">
                <label for="nama_kain">Nama Kain</label>
                    <select name="kelola_kain_id" class="form-control">
                    @foreach ($kelola_kain as $kain)     
                        @if (old('pelayanan_produk_id', $pemesanan->kelola_kain_id) == $kain->id )
                        <option value="{{$kain->id}}" selected>{{$kain->nama_kain}}</option>
                        @else                       
                        <option value="{{$kain->id}}">{{$kain->nama_kain}}</option>
                        @endif                       
                    @endforeach
                    </select>                
            </div>
            <div class="form-group">
                <label for="jumlah_orderan">Orderan</label>
                    <select name="kelola_orderan_id" class="form-control">
                    @foreach ($kelola_orderan as $orderan)     
                        @if (old('pelayanan_produk_id', $pemesanan->kelola_orderan_id) == $orderan->id )
                        <option value="{{$orderan->id}}" selected>{{$orderan->jumlah_orderan}}</option>
                        @else                       
                        <option value="{{$orderan->id}}">{{$orderan->jumlah_orderan}}</option>
                        @endif                       
                    @endforeach
                    </select>                
            </div>
            <div class="form-group">
                <label for="jumlah_pemesanan">Jumlah Pemesanan</label>
                <input name="jumlah_pemesanan" class="form-control" value="{{old('jumlah_pemesanan', $pemesanan->jumlah_pemesanan)}}" readonly>
                <div class="text-danger">
                    @error('jumlah_pemesanan')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input name="total_bayar" class="form-control" value="{{old('total_bayar', $pemesanan->total_bayar)}}" readonly>
                <div class="text-danger">
                    @error('total_bayar')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">               
                <div class="">
                    <img src="{{asset('storage/' . $pemesanan->bukti)}}" height="200px" alt="{{$pemesanan->name}}">
                </div>
                <div class="">
                    <label for="bukti">Ganti Foto Bukti</label>
                    <input name="bukti" class="form-control" type="file" id="bukti" value="{{old('bukti')}}">
                </div>                              
                <div class="text-danger">
                    @error('bukti')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input name="deskripsi" class="form-control" value="{{old('deskripsi', $pemesanan->deskripsi)}}">
                    <div class="text-danger">
                    @error('deskripsi')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
    <!-- /.box -->
</div>
    <!--/.col (left) -->
@endsection