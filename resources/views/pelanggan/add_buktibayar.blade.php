@extends('layouts.template')
@section('title', 'Bukti Pembayaran')

@section('content')

<div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" action="/pelanggan-buktibayar"  enctype="multipart/form-data" role="form">
        <div class="box-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
  </div>

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
    {{-- <form action="/pelanggan-buktibayar" method="get" enctype="multipart/form-data" > --}}
    <form method="post" action="/pelanggan-buktibayar"  enctype="multipart/form-data">

        @csrf
        <div class="box-body">

            {{-- <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly> --}}

            <div class="form-group">
                <label for="kode_produk">Kode</label>
                <input name="kode_produk" class="form-control" value="{{old('kode_produk')}}">
                <div class="text-danger">
                    @error('kode_produk')
                    {{$message}}
                    @enderror
                </div>
            </div>

            {{-- <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="pelayanan_produk_id" class="form-control">
                    @foreach ($pelayanan_produk as $pelayananProduk)                            
                    <option value="{{$pelayananProduk->id}}">{{$pelayananProduk->kategori}}</option>
                    @endforeach
                </select>                
            </div> --}}

            <div class="form-group">
                <label for="status_bayar">Status Bayar</label>
                <input name="status_bayar" class="form-control" value="{{old('status_bayar')}}">
                <div class="text-danger">
                    @error('status_bayar')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="validasi_pembayaran">Validasi Pembayaran</label>
                <input name="validasi_pembayaran" class="form-control" value="{{old('validasi_pembayaran')}}">
                <div class="text-danger">
                    @error('validasi_pembayaran')
                    {{$message}}
                    @enderror
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="detail">Detail</label>
                <input name="detail" class="form-control" value="{{old('detail')}}">
                <div class="text-danger">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div>
            {{-- Form Foto --}}
            <div class="form-group">
                <label for="bukti">Bukti</label>
                <input type="file" id="bukti">
                    <div class="text-danger">
                        @error('bukti')
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