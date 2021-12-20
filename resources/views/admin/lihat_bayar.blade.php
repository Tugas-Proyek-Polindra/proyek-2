@extends('layouts.template')

@section('title', 'Detail Bukti Pembayaran')
    
@section('content')

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i>Success:</h4>
        {{session('pesan')}}
    </div>     
@endif

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Semua @yield('title')</h3>
                <div class="box-tools">
                    <a href="/produk/kelola_kain/create" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-plus-square"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Bukti Pembayaran</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                        <th>Email</th>
                        <th>Status Bayar</th>
                        <th>Validasi Pembayaran</th>
                        <th>Bukti</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukti_pembayaran as $bukti_bayar)
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{$bukti_bayar->kode_buktibayar}} </td>
                        <td> {{$bukti_bayar->user->name}} </td>
                        <td> {{$bukti_bayar->user->alamat}} </td>
                        <td> {{$bukti_bayar->user->no_hp}} </td>
                        <td> {{$bukti_bayar->user->email}} </td>
                        <td> {{$bukti_bayar->status_bayar}} </td>
                        <td> {{$bukti_bayar->validasi_pembayaran}} </td>
                        <td> <img src="{{asset('storage/' . $bukti_bayar->bukti)}}" width="100px" alt="{{$bukti_bayar->kode_buktibayar}}"></td>
                        <td> {{$bukti_bayar->deskripsi}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection