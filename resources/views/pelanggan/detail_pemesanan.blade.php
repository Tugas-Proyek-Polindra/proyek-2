@extends('layouts.template')

@section('title', 'Detail Pemesanan')
    
@section('content')

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
                <th>No</th>
                <th>Kode Pesanan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Kategori</th>
                <th>Jenis Kain</th>
                <th>Jumlah Orderan</th>
                <th>Tgl Pesanan</th>
                <th>Tgl Deadline</th>
                <th>Tgl Deadline</th>
                <th>Desain</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $pesan)
            <tr>
                <td> {{$loop->iteration}} </td>
                <td> {{$pesan->kode_pemesanan}} </td>
                <td> {{$pesan->user->name}} </td>
                <td> {{$pesan->user->alamat}} </td>
                <td> {{$pesan->user->no_hp}} </td>
                <td> {{$pesan->user->email}} </td>
                <td> {{$pesan->pelayanan_produk->kategori}} </td>
                <td> {{$pesan->kelola_kain->nama_kain}} </td>
                <td> {{$pesan->kelola_orderan->jumlah_orderan}} </td>
                <td> {{Carbon\Carbon::parse($pesan->tgl_pesanan)->toFormattedDateString()}} </td>
                <td> {{Carbon\Carbon::parse($pesan->tgl_deadline)->toFormattedDateString()}} </td>
                <td> {{$pesan->desain}} </td>
                <td> {{$pesan->deskripsi}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection