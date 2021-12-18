@extends('layouts.template')
@section('title', 'Kain')
    
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
    <form action="/produk/kelola_kain" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="box-body">
                
                    <div class="form-group">
                        <label for="">Kode Kain</label>
                        <input name="kode_kain" class="form-control" value="{{old('kode_kain')}}">
                        <div class="text-danger">
                            @error('kode_kain')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Kain</label>
                        <input name="nama_kain" class="form-control" value="{{old('nama_kain')}}">
                        <div class="text-danger">
                            @error('nama_kain')
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

{{-- <form action="/produk/kelola_kain" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Kode Kain</label>
                    <input name="kode_kain" class="form-control" value="{{old('kode_kain')}}">
                    <div class="text-danger">
                        @error('kode_kain')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama Kain</label>
                    <input name="nama_kain" class="form-control" value="{{old('nama_kain')}}">
                    <div class="text-danger">
                        @error('nama_kain')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form> --}}


@endsection