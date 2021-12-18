@extends('layout.template')

@section('title', 'Laporan')
    
@section('content')

<a href="kelola_kain/add" class="btn btn-primary btn-sm">Tambah Data</a>

<div class="col-8">
   @if (session('pesan'))
   <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-check"></i>Success:</h4>
       {{session('pesan')}}
   </div>     
   @endif
   {{-- {{dd($kain)}} --}}
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>Id Pemesanan</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No. Telp</th>
               <th>Email</th>
               <th>Tgl Pesanan</th>
               <th>Tgl Deadline</th>
               <th>Jumlah</th>
               <th>Deskripsi</th>
               <th>Status Bayar</th>
               <th>Status Pemesanan</th>
               <th>Total</th>
           </tr>
       </thead>
       {{-- <tbody>
           <?php $no=1; ?>
           @foreach ($kain as $data)
           <tr>
               <td> {{$data->id_kain}} </td>
               <td> {{$data->nama_kain}} </td>
               <td>
                   <a href="/kelola_kain/edit/{{$data->id_kain}}" class="btn btn-sm btn-warning" >Edit</a>
                   <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id_kain}}">
                       Delete
                   </button>
               </td>
           </tr>
           @endforeach
       </tbody> --}}
   </table>

   {{-- @foreach ($kain as $data)
   <div class="modal modal-danger fade" id="delete{{$data->id_kain}}">
       <div class="modal-dialog modal-sm">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title">{{$data->nama_kain}}</h4>
           </div>
           <div class="modal-body">
             <p>Apakah Anda Yakin Ingin Menghapus Data Ini....???</p>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
             <a href="/kelola_kain/delete/{{$data->id_kain}} " class="btn btn-outline">Yes</a>
           </div>
         </div>
         <!-- /.modal-content -->
       </div>
       <!-- /.modal-dialog -->
     </div>   
     
   @endforeach --}}

</div>

@endsection