<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>

  <li class="{{ request()->is('dashboard') ? 'active' : '' }}" ><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

  {{-- Fitur Admin --}}
  @if (auth()->user()->level==1)
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i><span> Produk</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="/produk/pelayanan"><i class="fa fa-circle-o"></i> Pelayanan Produk</a></li>
      <li><a href="/produk"><i class="fa fa-circle-o"></i> Kelola Produk</a></li>
      <li><a href="/produk/kelola_kain"><i class="fa fa-circle-o"></i> Kain</a></li>
      <li><a href="/produk/kelola_orderan"><i class="fa fa-circle-o"></i> Orderan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i> <span> Bukti Bayar</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="/bukti-bayar"><i class="fa fa-circle-o"></i> Kelola Bukti Bayar</a></li>
      <li><a href="/bukti-bayar/show"><i class="fa fa-circle-o"></i> Lihat Bayar</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i> <span> Pelangan</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="/invoice-pesanan"><i class="fa fa-circle-o"></i> Kelola Invoice Pesanan</a></li>
      <li><a href="/pesanan/create"><i class="fa fa-circle-o"></i> Pesan Onset</a></li>
    </ul>
  </li>
  {{-- Fitur Penjual --}}
  @elseif (auth()->user()->level==2)
  <li class="{{ request()->is('kelola_akun') ? 'active' : '' }}" ><a href="/kelola_akun"><i class="fa fa-book"></i> <span>Kelola Akun</span></a></li>       
  <li class="{{ request()->is('laporan') ? 'active' : '' }}" ><a href="/laporan"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
  
  {{-- Fitur Pelanggan --}}
  @elseif (auth()->user()->level==0)
  <li class="{{ request()->is('pemesanan') ? 'active' : '' }}" ><a href="/pemesanan"><i class="fa fa-book"></i> <span> Pemesanan</span></a></li>       
  <li class="{{ request()->is('pelanggan_pemesanan') ? 'active' : '' }}" ><a href="/pemesanan/create"><i class="fa fa-book"></i> <span> Form Pemesanan</span></a></li>       
  <li class="{{ request()->is('pelanggan-invoice') ? 'active' : '' }}" ><a href="/pelanggan-invoice"><i class="fa fa-book"></i> <span> Invoice Pemesanan</span></a></li>       
  <li class="{{ request()->is('pelanggan-buktibayar') ? 'active' : '' }}" ><a href="/pelanggan-buktibayar"><i class="fa fa-book"></i> <span> Bukti Pembayaran</span></a></li>       
</ul>   
@endif