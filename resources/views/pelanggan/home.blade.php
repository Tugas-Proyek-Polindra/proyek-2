@extends('layouts.template')

@section('title', 'Detail Bukti Pembayaran')
    
@section('content')

<!-- List Order -->
<h3 class="text-center p-3"><span>KATEGORI LAYANA KONVEKSI PRODUK PADA KAFKA</span> </h3>
<div class="containers text-center">
    <div class="row justify-content-center ms-4">
        <div class="col-md-3 col-sm-3">
            <div class="card" style="width: 16rem;">
                <img src="img/kaos_sablon.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sablon Kaos</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                  <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                </div>
              </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card" style="width: 16rem;">
                <img src="img/sablon_jahit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sablon Jahit</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                  <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                </div>
              </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="card" style="width: 16rem;">
                <img src="img/jersey_printing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jarsey Printing</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                  <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                </div>
              </div>
        </div>
      </div>
        <div class="row justify-content-center m-4">
                <div class="col-lg-3 ">
                  <div class="card ms-3" style="width: 16rem;">
                      <img src="img/kemeja1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Kemeja</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-3">
                    <div class="card ms-3" style="width: 16rem;">
                        <img src="img/jaket.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Jaket</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                          <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                        </div>
                      </div>
                </div>
                  <div class="col-lg-3 ">
                  <div class="card ms-2" style="width: 16rem;">
                      <img src="img/merchandise.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Marchandice Printing</h5>                                <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#" class="btn btn-primary">Produk Selengkapnya</a>
                      </div>
                    </div>
              </div>
      </div>
</div>

@endsection