@extends('layouts.template')
@section('title', 'Produk')

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
    <form action="/produk" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input name="kode_produk" class="form-control" value="{{old('kode_produk')}}">
                <div class="text-danger">
                    @error('kode_produk')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input name="nama_produk" class="form-control" value="{{old('nama_produk')}}">
                <div class="text-danger">
                    @error('nama_produk')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
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
                        <option value="{{$kain->id}}">{{$kain->nama_kain}}</option>
                        @endforeach
                    </select>                
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <select name="ukuran" class="form-control">
                    <option value="S" >S</option>
                    <option value="M" >M</option>
                    <option value="L" >L</option>
                    <option value="XL" >XL</option>
                    <option value="XXL" >XXL</option>
                </select>              
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <select name="model" class="form-control">
                    <option value="Pendek" >Pendek</option>
                    <option value="Panjang" >Panjang</option>
                </select>                 
            </div>
            <div class="form-group">
                <label for="desain">Desain</label>
                <select name="desain" class="form-control">
                    <option value="Sendiri" >Punya Sendiri</option>
                    <option value="Dibuatkan" >Dibuatkan</option>
                </select>           
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
                <label for="img">Example</label>
                <input name="img" class="form-control" type="file" id="img" value="{{old('img')}}">
                <div class="text-danger">
                    @error('img')
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