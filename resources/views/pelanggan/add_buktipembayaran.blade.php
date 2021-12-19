@extends('layouts.template')
@section('title', 'Bukti Pembayaran')

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
                    <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>
                    <div class="form-group">
                        <label for="kode_pemesanan">Kode</label>
                        <input name="kode_pemesanan" class="form-control" value="{{old('kode_pemesanan')}}">
                        <div class="text-danger">
                            @error('kode_pemesanan')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
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
                    <div class="form-group">
                        <label for="bukti">Bukti</label>
                        <input type="file" id="bukti">
                        <div class="text-danger">
                            @error('bukti')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>       
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection