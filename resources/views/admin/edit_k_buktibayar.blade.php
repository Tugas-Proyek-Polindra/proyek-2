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
    <form method="post" action="/bukti-bayar/{{$kelola_buktibayar->id}}"  enctype="multipart/form-data" >
        @method('put')
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="kode_buktibayar">Kode Bayar</label>
                <input name="kode_buktibayar" class="form-control" value="{{old('kode_buktibayar', $kelola_buktibayar->kode_buktibayar)}}" readonly>
                <div class="text-danger">
                    @error('kode_buktibayar')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input name="name" class="form-control" value="{{old('user_id', $kelola_buktibayar->user->name)}}" readonly>
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                    <input name="alamat" class="form-control" value="{{old('alamat', $kelola_buktibayar->user->alamat)}}" readonly>
                    <div class="text-danger">
                    @error('alamat')
                    {{$message}}
                    @enderror
                    </div>               
            </div>
            <div class="form-group">
                <label for="no_hp">Handphone</label>
                <input name="no_hp" class="form-control" value="{{old('no_hp', $kelola_buktibayar->user->no_hp)}}" readonly>
                    <div class="text-danger">
                    @error('no_hp')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" value="{{old('email', $kelola_buktibayar->user->email)}}" readonly>
                    <div class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    </div>                 
            </div>

            <div class="form-group">
                <label for="status_bayar">Status Bayar</label>
                <select name="status_bayar" id="combobox" class="form-control">
                        <option value="Lunas" {{$kelola_buktibayar ? ($kelola_buktibayar->status_bayar == "Lunas" ? 'selected' : "") : "" }}>Lunas</option>
                        <option value="Pending" {{$kelola_buktibayar ? ($kelola_buktibayar->status_bayar == "Pending" ? 'selected' : "") : "" }}>Pending</option>
                </select>     
            </div>
            
            <div class="form-group">
                <label for="status_bayar">Validasi Bayar</label>
                <select name="status_bayar" id="combobox" class="form-control">
                        <option value="Valid" {{$kelola_buktibayar ? ($kelola_buktibayar->validasi_pembayaran == "Valid" ? 'selected' : "") : "" }}>Valid</option>
                        <option value="Invalid" {{$kelola_buktibayar ? ($kelola_buktibayar->validasi_pembayaran == "Invalid" ? 'selected' : "") : "" }}>Invalid</option>
                </select>     
            </div>
            {{-- 
            <div class="form-group">
                <label for="model">Model</label>
                <select name="model" id="combobox" class="form-control">
                    @if (old('model', $kelola_buktibayar->model == 'Pendek' ))
                        <option {{$kelola_buktibayar->model ? 'selected' : '' }} value="Pendek" >Pendek</option>
                        <option value="Panjang" >Panjang</option>
                    @elseif(old('model', $kelola_buktibayar->model == 'Panjang' ))
                        <option value="Pendek" >Pendek</option>
                        <option {{$kelola_buktibayar->model ? 'selected' : '' }} value="Panjang" >Panjang</option>
                    @endif
                </select>                 
            </div>
            <div class="form-group">
                <label for="desain">Desain</label>
                <select name="desain" class="form-control">
                    @if (old('desain', $kelola_buktibayar->desain == 'Sendiri' ))
                        <option {{$kelola_buktibayar->desain ? 'selected' : '' }} value="Sendiri" >Punya Sendiri</option>
                        <option value="Dibuatkan" >Dibuatkan</option>
                    @elseif(old('desain', $kelola_buktibayar->desain == 'Dibuatkan'))
                        <option value="Sendiri" >Punya Sendiri</option>
                        <option {{$kelola_buktibayar->desain ? 'selected' : '' }} value="Dibuatkan" >Dibuatkan</option>                    
                    @endif                    
                </select>           
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <input name="detail" class="form-control" value="{{old('detail', $kelola_buktibayar->detail)}}">
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