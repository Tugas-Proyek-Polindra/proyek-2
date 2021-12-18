@extends('layouts.template')

@section('title', 'Pesan Onset')
    
@section('content')
<form action="/pelayanan_produk/insert" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="content">
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                   <label for="">Nama</label>
                   <input name="#" class="form-control" value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Alamat</label>
                   <input name="#2" class="form-control" value="{{old('#2')}}">
                   <div class="text-danger">
                       @error('#2')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Handphone</label>
                   <input name="#" class="form-control"value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Email</label>
                   <input name="email" class="form-control"value="{{old('email')}}">
                   <div class="text-danger">
                       @error('email')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Tanggal Pesanan</label>
                   <input name="#" class="form-control"value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Tanggal Deadline</label>
                   <input name="#" class="form-control"value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Keterangan</label>
                   <input name="#" class="form-control"value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>
               <div class="form-group">
                   <label for="">Jenis Kain</label>
                   <input name="#" class="form-control"value="{{old('#')}}">
                   <div class="text-danger">
                       @error('#')
                           {{$message}}
                       @enderror
                   </div>
               </div>

               <div class="form-group">
                   <button class="btn btn-primary btn-sm">Simpan</button>
               </div>
           </div>
       </div>
   </div>
</form>

@endsection