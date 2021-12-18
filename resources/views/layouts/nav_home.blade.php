<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand me-3" href="/">Konveksi <span class="fw-bold ">Kafka</span></a>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Cara Order</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link nav-bar dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Sablon Kaos</a></li>
              <li><a class="dropdown-item" href="#">Sablon Jahit</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Jersey Printing</a></li>
              <li><a class="dropdown-item" href="#">Kemeja | Jaket</a></li>
              <li><a class="dropdown-item" href="#">Merchandise Printing</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/contact_us">Contact Us</a>
          </li>
        </ul>
        <div class="navbar-nav ms-auto">                
        </ul class="navbar-nav">
          <li class="navbar-item"><a class="navbar-brand" href="{{ route('register') }}">Registrasi</a></li> 
          <li class="navbar-item"><a class="navbar-brand" href="{{ route('login') }}">Login</a></li>
        </div>
            <form class="d-flex">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>                             
        </ul>               
      </div>

    </div>
  </nav>
<!-- Akhir Navbar -->