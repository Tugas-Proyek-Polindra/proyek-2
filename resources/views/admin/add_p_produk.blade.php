@extends('layouts.template')
@section('title', 'Tambah Pelayanan')
    
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
    <form action="/produk/pelayanan" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="">Kode Pelayanan</label>
                <input name="kode_pelayanan" class="form-control" value="{{old('kode_pelayanan')}}">
                <div class="text-danger">
                    @error('kode_pelayanan')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <input name="kategori" class="form-control" value="{{old('kategori')}}">
                <div class="text-danger">
                    @error('kategori')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">Harga Satuan</label>
                <input name="harga_satuan" class="form-control"value="{{old('harga_satuan')}}">
                <div class="text-danger">
                    @error('harga_satuan')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>     
        </div> 
    </form>
    </div>
    <!-- /.box -->
</div>


@endsection