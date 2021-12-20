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
            <form action="/pelanggan-buktibayar" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="box-body">
                    <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>
                    {{-- <div class="form-group">
                        <label for="kode_pemesanan">Kode</label>
                        <input name="kode_pemesanan" class="form-control" value="{{old('kode_pemesanan')}}">
                        <div class="text-danger">
                            @error('kode_pemesanan')
                            {{$message}}
                            @enderror
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="kode_buktibayar">Kode</label>
                        <input name="kode_buktibayar" class="form-control" value="{{old('kode_buktibayar')}}">
                        <div class="text-danger">
                            @error('kode_buktibayar')
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
                        <label for="deskripsi">deskripsi</label>
                        <input name="deskripsi" class="form-control" value="{{old('deskripsi')}}">
                        <div class="text-danger">
                            @error('deskripsi')
                            {{$message}}
                            @enderror
                        </div>
                    </div>           
                    <div class="form-group">
                        <label for="bukti">Bukti</label>
                        <input name="bukti" class="form-control" type="file" id="bukti" value="{{old('desain')}}">
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