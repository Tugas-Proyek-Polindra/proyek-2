@extends('layouts.template')
@section('title', 'Orderan')

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
    <form action="/produk/kelola_orderan" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kode_order">Kode Orderan</label>
                <input name="kode_order" class="form-control" value="{{old('kode_order')}}">
                <div class="text-danger">
                    @error('kode_order')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">Jumlah Orderan</label>
                <input name="jumlah_orderan" class="form-control" value="{{old('jumlah_orderan')}}">
                <div class="text-danger">
                    @error('jumlah_orderan')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">Keterangan Pcs</label>
                <input name="pcs" class="form-control" value="{{old('pcs')}}">
                <div class="text-danger">
                    @error('pcs')
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