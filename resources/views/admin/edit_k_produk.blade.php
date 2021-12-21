@extends('layouts.template')
@section('title', 'Produk')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit @yield('title')</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="/produk/{{$kelola_produk->id}}"  enctype="multipart/form-data" >
        @method('put')
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input name="kode_produk" class="form-control" value="{{old('kode_produk', $kelola_produk->kode_produk)}}">
                <div class="text-danger">
                    @error('kode_produk')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input name="nama_produk" class="form-control" value="{{old('nama_produk', $kelola_produk->nama_produk)}}">
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
                        @if (old('pelayanan_produk_id', $kelola_produk->pelayanan_produk_id) == $pelayananProduk->id )
                        <option value="{{$pelayananProduk->id}}" selected>{{$pelayananProduk->kategori}}</option>
                        @else                       
                        <option value="{{$pelayananProduk->id}}">{{$pelayananProduk->kategori}}</option>
                        @endif                       
                    @endforeach
                </select>                
            </div>
            <div class="form-group">
                <label for="nama_kain">Nama Kain</label>
                    <select name="kelola_kain_id" class="form-control">
                    @foreach ($kelola_kain as $kain)     
                        @if (old('pelayanan_produk_id', $kelola_produk->kelola_kain_id) == $kain->id )
                        <option value="{{$kain->id}}" selected>{{$kain->nama_kain}}</option>
                        @else                       
                        <option value="{{$kain->id}}">{{$kain->nama_kain}}</option>
                        @endif                       
                    @endforeach
                    </select>                
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <select name="ukuran" id="combobox" class="form-control">
                        <option value="S" {{$kelola_produk ? ($kelola_produk->ukuran == "S" ? 'selected' : "") : "" }}>S</option>
                        <option value="M" {{$kelola_produk ? ($kelola_produk->ukuran == "M" ? 'selected' : "") : "" }}>M</option>
                        <option value="L" {{$kelola_produk ? ($kelola_produk->ukuran == "L" ? 'selected' : "") : "" }}>L</option>
                        <option value="XL" {{$kelola_produk ? ($kelola_produk->ukuran == "XL" ? 'selected' : "") : "" }}>XL</option>
                        <option value="XXL" {{$kelola_produk ? ($kelola_produk->ukuran == "XXL" ? 'selected' : "") : "" }}>XXL</option>
                </select>              
            </div>
            {{-- <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <select name="ukuran" id="combobox" class="form-control">
                    @if (old('ukuran', $kelola_produk->ukuran == 'S' ))
                        <option {{$kelola_produk->ukuran ? 'selected' : '' }} value="S">S</option>
                        <option value="M" >M</option>
                        <option value="L" >L</option>
                        <option value="XL" >XL</option>
                        <option value="XXL" >XXL</option>
                    @elseif(old('ukuran', $kelola_produk->ukuran == 'M' ))
                        <option value="S" >S</option>
                        <option {{$kelola_produk->ukuran ? 'selected' : '' }} value="M">M</option>
                        <option value="L" >L</option>
                        <option value="XL" >XL</option>
                        <option value="XXL" >XXL</option>
                    @elseif(old('ukuran', $kelola_produk->ukuran == 'L' ))
                        <option value="S" >S</option>
                        <option value="M" >M</option>
                        <option {{$kelola_produk->ukuran ? 'selected' : '' }} value="L" >L</option>
                        <option value="XL" >XL</option>
                        <option value="XXL" >XXL</option>
                    @elseif(old('ukuran', $kelola_produk->ukuran == 'XL' ))
                        <option value="S" >S</option>
                        <option value="M" >M</option>
                        <option value="L" >L</option>
                        <option {{$kelola_produk->ukuran ? 'selected' : '' }} value="XL" >XL</option>
                        <option value="XXL" >XXL</option>                    
                    @elseif(old('ukuran', $kelola_produk->ukuran == 'XXL' ))
                        <option value="S" >S</option>
                        <option value="M" >M</option>
                        <option value="L" >L</option>
                        <option value="XL" >XL</option>
                        <option {{$kelola_produk->ukuran ? 'selected' : '' }} value="XXL" >XXL</option>                    @endif
                </select>              
            </div> --}}
            <div class="form-group">
                <label for="model">Model</label>
                <select name="model" id="combobox" class="form-control">
                    @if (old('model', $kelola_produk->model == 'Pendek' ))
                        <option {{$kelola_produk->model ? 'selected' : '' }} value="Pendek" >Pendek</option>
                        <option value="Panjang" >Panjang</option>
                    @elseif(old('model', $kelola_produk->model == 'Panjang' ))
                        <option value="Pendek" >Pendek</option>
                        <option {{$kelola_produk->model ? 'selected' : '' }} value="Panjang" >Panjang</option>
                    @endif
                </select>                 
            </div>
            <div class="form-group">
                <label for="desain">Desain</label>
                <select name="desain" class="form-control">
                    @if (old('desain', $kelola_produk->desain == 'Sendiri' ))
                        <option {{$kelola_produk->desain ? 'selected' : '' }} value="Sendiri" >Punya Sendiri</option>
                        <option value="Dibuatkan" >Dibuatkan</option>
                    @elseif(old('desain', $kelola_produk->desain == 'Dibuatkan'))
                        <option value="Sendiri" >Punya Sendiri</option>
                        <option {{$kelola_produk->desain ? 'selected' : '' }} value="Dibuatkan" >Dibuatkan</option>                    
                    @endif                    
                </select>           
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <input name="detail" class="form-control" value="{{old('detail', $kelola_produk->detail)}}">
                <div class="text-danger">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div>
            {{-- Form Foto --}}
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto">
                    <div class="text-danger">
                        @error('foto')
                        {{$message}}
                        @enderror
                    </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
    <!-- /.box -->
</div>
    <!--/.col (left) -->
@endsection