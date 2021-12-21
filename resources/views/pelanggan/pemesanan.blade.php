@extends('layouts.template')

@section('title', 'Pemesanan')   
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> Tambah @yield('title')</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="/pemesanan" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kode_pemesanan">Kode</label>
                <input name="kode_pemesanan" class="form-control" value="{{old('kode_pemesanan')}}">
                <div class="text-danger">
                    @error('kode_pemesanan')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>

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
                <label for="kategori">Pelayanan Produk</label>
                <select name="pelayanan_produk_id" class="form-control">
                    @foreach ($pelayanan_produk as $pelayananProduk)                            
                    <option value="{{$pelayananProduk->id}}">{{$pelayananProduk->kategori}}</option>
                    @endforeach
                </select>  
            </div>
            <div class="form-group">
                <label for="nama_kain">Nama Kain</label>
                <select name="kelola_kain_id" class="form-control">
                    @foreach ($kelola_kain as $kain)                            
                    <option value="{{$kain->id}}" selected>{{$kain->nama_kain}}</option>
                    @endforeach
                </select>                
            </div>                
            <div class="form-group">
                <label for="jumlah_orderan">Jumlah Orderan</label>
                <select name="kelola_orderan_id" class="form-control">
                    @foreach ($kelola_orderan as $orderan)                            
                    <option value="{{$orderan->id}}" selected>{{$orderan->jumlah_orderan}}</option>
                    @endforeach
                </select>   
            </div>

            <div class="form-group">
                <label for="jumlah_pemesanan">Jumlah Pemesanan</label>
                <input name="jumlah_pemesanan" class="form-control" value="{{old('jumlah_pemesanan')}}">
                <div class="text-danger">
                    @error('jumlah_pemesanan')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input name="total_bayar" class="form-control" value="{{old('total_bayar')}}">
                <div class="text-danger">
                    @error('total_bayar')
                        {{$message}}
                    @enderror
                </div>
            </div>

            
            <div class="form-group row">
                <label for="tgl_pesanan" class="col-sm-2 col-form-label">Tanggal Pesanan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_pesanan" name="tgl_pesanan" value="{{old('tgl_pesanan')}}">
                    <div class="text-danger">
                        @error('tgl_pesanan')
                            {{$message}}
                        @enderror
                </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="tgl_deadline" class="col-sm-2 col-form-label">Tanggal Deadline</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_deadline" name="tgl_deadline" value="{{old('tgl_deadline')}}">
                    <div class="text-danger">
                        @error('tgl_deadline')
                            {{$message}}
                        @enderror
                </div>
                </div>
            </div>

            <div class="form-group">
                <label for="desain">Desain</label>
                <input name="desain" class="form-control" type="file" id="desain" value="{{old('desain')}}">
                    <div class="text-danger">
                        @error('desain')
                        {{$message}}
                        @enderror
                    </div>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" value="{{old('deskripsi')}}" cols="71" rows="5" placeholder="Enter ..."></textarea>
                <div class="text-danger">
                    @error('deskripsi')
                        {{$message}}
                    @enderror
                </div>
            </div>       
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

    </div>
    <!-- /.box -->
</div>

@endsection