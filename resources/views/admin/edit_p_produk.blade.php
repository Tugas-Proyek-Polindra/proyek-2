@extends('layouts.template')
@section('title', 'Edit Pelayanan')
    
@section('content')

<div class="col-lg-6">
    <form method="post" action="/produk/pelayanan/{{$pelayanan->id}} "  enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Kode Pelayanan</label>
            <input name="kode_pelayanan" class="form-control" @error('kode_pelayanan') is-valid @enderror id="kode_pelayanan" value="{{old('kode_pelayanan', $pelayanan->kode_pelayanan)}}">
            @error('kode_pelayanan')
            <div class="text-danger">               
                    {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <input name="kategori" class="form-control" value="{{old('kategori', $pelayanan->kategori)}}">
            <div class="text-danger">
                @error('kategori')
                    {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="">Harga Satuan</label>
            <input name="harga_satuan" class="form-control"value="{{old('harga_satuan', $pelayanan->harga_satuan)}}">
            <div class="text-danger">
                @error('harga_satuan')
                    {{$message}}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
</div>

@endsection