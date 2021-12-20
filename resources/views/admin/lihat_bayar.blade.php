@extends('layouts.template')

@section('title', 'Kelola Bukti Bayar')
    
@section('content')

<a href="kelola_buktibayar/add" class="btn btn-primary btn-sm">Tambah Data</a>

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
                <th>No</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($lihat_bayar as $bayar)
          <tr>
            <td> {{$loop->iteration}} </td>
            {{-- <td> {{$bayar->kode_buktibayar}} </td> --}}
              <td> {{$bayar->user->name}} </td>
              <td> {{$bayar->user->alamat}} </td>
              <td> {{$bayar->user->no_hp}} </td>
              <td> {{$bayar->user->email}} </td>
              <td> {{$bayar->deskripsi}} </td>
              <td> {{$bayar->user->foto}} </td>
              <td>
                <a href="/produk/{{$bayar->id}}" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-file-text"></i></a>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>


   @endsection