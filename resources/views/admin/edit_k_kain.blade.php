@extends('layouts.template')
@section('title', 'Edit kain')

@section('content')

<form action="/kelola_kain/update/{{$kain->id_kain}} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Id Kain</label>
                    <input name="id_kain" class="form-control" value="{{$kain->id_kain}}">
                    <div class="text-danger">
                        @error('id_kain')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama Kain</label>
                    <input name="nama_kain" class="form-control" value="{{$kain->nama_kain}}">
                    <div class="text-danger">
                        @error('nama_kain')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection