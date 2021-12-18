<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">

    <title>Home</title>
  </head>
  <body>    

    @include('layouts.nav_home')

    <!-- Carousel -->
    <div class="container">  
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel mx-5">
        <div class="carousel-inner ">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/kaos-distro.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/sablon1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Sablon-yg-tepat.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      <!-- Akhir Carousel -->

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


      <!-- Footer -->
      <footer class="satu mt-auto bg-dark text-light">
        <div class="container p-3 text-center ">
         
         <span class="text-muted">Copyright &copy 2021. All Right Reserved</span>
        </div>
      </footer>
      <!-- Akhir Footer -->

      <script src="js/bootstrap.js"></script>
      <script src="js/popper.min.js"></script>
  </body>
</html>