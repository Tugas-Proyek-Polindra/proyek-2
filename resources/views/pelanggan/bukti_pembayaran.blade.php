@extends('layouts.template')

@section('title', 'Bukti Pembayaran')
    
@section('content')
<a href="/pelayanan_produk/add" class="btn btn-primary btn-sm">Tambah Data</a>

<div class="col-8">
   @if (session('pesan'))
   <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Success:</h4>
      {{session('pesan')}}
   </div>     
   @endif
   {{-- {{dd($pelayanan)}} --}}
   <table class="table table-bordered">
      <thead>
         <tr>
              <th>Id Pembayaran</th>
              <th>Username</th>
              <th>Alamat</th>
              <th>No. Hp</th>
              <th>Email</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Aksi</th>
           </tr>
       </thead>
       {{-- <tbody>
           <?php $no=1; ?>
           @foreach ($pelayanan as $data)
           <tr>
               <td> {{$data->id_pelayanan}} </td>
               <td> {{$data->kategori}} </td>
               <td> {{$data->harga_satuan}} </td>
               <td>
                   <a href="#" class="btn btn-sm btn-success" >Detail</a>
                   <a href="#" class="btn btn-sm btn-warning" >Edit</a>
                   <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="">
                       Delete
                   </button>
               </td>
           </tr>
           @endforeach
       </tbody> --}}
   </table>
  </div>

@endsection