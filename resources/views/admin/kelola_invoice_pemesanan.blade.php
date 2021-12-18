@extends('layouts.template')

@section('title', 'Invoice Pelanggan')
    
@section('content')
   <table class="table table-bordered">
      <thead>
         <tr>
            <th>Kode Pesanan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Tgl Pesanan</th>
            <th>Tgl Deadline</th>
            <th>Desain</th>
            <th>Jenis Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Deskripsi</th>
            <th>Harga Satuan</th>
            <th>Total Bayar</th>
            <th>Status Pembayaran</th>
            <th>Status Pemesanan</th>
            <th>Status Barang</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no=1; ?>
         @foreach ($invoice_pelangan as $pelanggan)
         <tr>
            <td> {{$pelanggan->id_pelayanan}} </td>
            <td> {{$pelanggan->kategori}} </td>
            <td> {{$pelanggan->harga_satuan}} </td>
            <td>
                  <a href="#" class="btn btn-sm btn-success" >Detail</a>
                  <a href="#" class="btn btn-sm btn-warning" >Edit</a>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="">
                     Delete
                  </button>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
@endsection