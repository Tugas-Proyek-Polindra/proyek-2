@extends('layouts.template')
@section('title', 'Edit Bukti Bayar')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-7">
    <!-- general form elements -->
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit @yield('title')</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="/pelanggan-buktibayar/{{$bukti_pembayaran->id}}"  enctype="multipart/form-data" >
        @method('put')
        @csrf
        <div class="box-body">
            <input type="hidden" name="user_id"  id="user_id" class="form-control" value="{{Auth::user()->id}}" readonly>

            <div class="form-group">
                <label for="kode_buktibayar">Kode Bayar</label>
                <input name="kode_buktibayar" class="form-control" value="{{old('kode_buktibayar', $bukti_pembayaran->kode_buktibayar)}}" readonly>
                <div class="text-danger">
                    @error('kode_buktibayar')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input name="name" class="form-control" value="{{old('user_id', $bukti_pembayaran->user->name)}}" readonly>
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                    <input name="alamat" class="form-control" value="{{old('alamat', $bukti_pembayaran->user->alamat)}}" readonly>
                    <div class="text-danger">
                    @error('alamat')
                    {{$message}}
                    @enderror
                    </div>               
            </div>
            <div class="form-group">
                <label for="no_hp">Handphone</label>
                <input name="no_hp" class="form-control" value="{{old('no_hp', $bukti_pembayaran->user->no_hp)}}" readonly>
                    <div class="text-danger">
                    @error('no_hp')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" value="{{old('email', $bukti_pembayaran->user->email)}}" readonly>
                    <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>

            <div class="form-group">
                <label for="status_bayar">Status Bayar</label>
                <select name="status_bayar" id="combobox" class="form-control">
                        <option value="Lunas" {{$bukti_pembayaran ? ($bukti_pembayaran->status_bayar == "Lunas" ? 'selected' : "") : "" }}>Lunas</option>
                        <option value="Pending" {{$bukti_pembayaran ? ($bukti_pembayaran->status_bayar == "Pending" ? 'selected' : "") : "" }}>Pending</option>
                </select>     
            </div>
            
            <div class="form-group">
                <label for="status_bayar">Validasi Bayar</label>
                <select name="status_bayar" id="combobox" class="form-control">
                        <option value="Valid" {{$bukti_pembayaran ? ($bukti_pembayaran->validasi_pembayaran == "Valid" ? 'selected' : "") : "" }}>Valid</option>
                        <option value="Invalid" {{$bukti_pembayaran ? ($bukti_pembayaran->validasi_pembayaran == "Invalid" ? 'selected' : "") : "" }}>Invalid</option>
                </select>     
            </div>
            <div class="form-group">
                <div class="">
                    <img src="{{asset('storage/' . $bukti_pembayaran->bukti)}}" height="200px" alt="{{$bukti_pembayaran->name}}">
                </div>
                <div class="">
                    <label for="bukti">Ganti Foto Bukti</label>
                    <input name="bukti" class="form-control" type="file" id="bukti" value="{{old('bukti')}}">
                </div>                              
                <div class="text-danger">
                    @error('bukti')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input name="deskripsi" class="form-control" value="{{old('deskripsi', $bukti_pembayaran->deskripsi)}}">
                    <div class="text-danger">
                    @error('deskripsi')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>
            {{-- 
            <div class="form-group">
                <label for="model">Model</label>
                <select name="model" id="combobox" class="form-control">
                    @if (old('model', $bukti_pembayaran->model == 'Pendek' ))
                        <option {{$bukti_pembayaran->model ? 'selected' : '' }} value="Pendek" >Pendek</option>
                        <option value="Panjang" >Panjang</option>
                    @elseif(old('model', $bukti_pembayaran->model == 'Panjang' ))
                        <option value="Pendek" >Pendek</option>
                        <option {{$bukti_pembayaran->model ? 'selected' : '' }} value="Panjang" >Panjang</option>
                    @endif
                </select>                 
            </div>
            <div class="form-group">
                <label for="desain">Desain</label>
                <select name="desain" class="form-control">
                    @if (old('desain', $bukti_pembayaran->desain == 'Sendiri' ))
                        <option {{$bukti_pembayaran->desain ? 'selected' : '' }} value="Sendiri" >Punya Sendiri</option>
                        <option value="Dibuatkan" >Dibuatkan</option>
                    @elseif(old('desain', $bukti_pembayaran->desain == 'Dibuatkan'))
                        <option value="Sendiri" >Punya Sendiri</option>
                        <option {{$bukti_pembayaran->desain ? 'selected' : '' }} value="Dibuatkan" >Dibuatkan</option>                    
                    @endif                    
                </select>           
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <input name="detail" class="form-control" value="{{old('detail', $bukti_pembayaran->detail)}}">
                <div class="text-danger">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div> --}}
            {{-- Form Foto --}}
            {{-- <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto">
                    <div class="text-danger">
                        @error('foto')
                        {{$message}}
                        @enderror
                    </div>
            </div> --}}
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