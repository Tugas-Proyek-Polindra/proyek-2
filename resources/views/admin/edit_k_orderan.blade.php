@extends('layouts.template')
@section('title', 'Edit Orderan')

@section('content')

<form action="/produk/kelola_orderan/{{$orderan->id}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="kode_order">Kode</label>
                    <input name="kode_order" class="form-control" value="{{$orderan->kode_order}}">
                    <div class="text-danger">
                        @error('kode_order')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Orderan</label>
                    <input name="jumlah_orderan" class="form-control" value="{{$orderan->jumlah_orderan}}">
                    <div class="text-danger">
                        @error('jumlah_orderan')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Keterangan Pcs</label>
                    <input name="pcs" class="form-control" value="{{$orderan->pcs}}">
                    <div class="text-danger">
                        @error('pcs')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection