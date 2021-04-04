<div class="page-wrapper-inner">
    <!-- Navbar Custom Menu -->
    <div class="navbar-custom-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu list-unstyled">
                    <li><a href="#"><i class="fas fa-bars"></i> Dashboard</a></li>
                    <li class="has-submenu"><a href="#"><i class="fas fa-store"></i> Transaksi</a>
                        <ul class="submenu">
                            <li><a href="#">Pemesanan</a></li>
                            <li><a href="#">Retur Pemesanan</a></li>
                            <li><a href="#">Nota Project</a></li>
                            <li><a href="#">Update Status Pemesanan</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="fas fa-cubes"></i> Persedian Toko</a>
                        <ul class="submenu">
                            <li><a href="#">Pengiriman Ke Toko</a></li>
                            <li><a href="#">Penyesuaian Stok</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="fas fa-layer-group"></i> Master</a>
                        <ul class="submenu">
                            <li><a href="{{ route('produk.index') }}">Master Item</a></li>
                            <li><a href="{{ route('produk.kategori.index') }}">Kategori</a></li>
                            <li><a href="{{ route('produk.uom.index') }}">Satuan</a></li>
                            <li><a href="{{ route('kontak.member.index') }}">Pelanggan</a></li>
                            <li><a href="{{ route('kontak.supplier.index') }}">Supplier</a></li>
                            <li><a href="#">Kas</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="far fa-money-bill-alt"></i> Arus Kas</a></li>
                    <li class="has-submenu"><a href="#"><i class="fas fa-chart-bar"></i></i> Laporan</a>
                        <ul class="submenu">
                            <li class="has-submenu">
                              <a href="#">Penjualan</a>
                              <ul class="submenu">
                                <li>
                                  <a href="#">Periode penjulan</a></li>
                                <li>
                              </ul>
                            </li>
                            <li class="has-submenu">
                              <a href="#">Persediaan</a>
                              <ul class="submenu">
                                <li><a href="#">Saldo Stok Toko</a></li>
                                <li><a href="#">Saldo Stok Global</a></li>
                                <li><a href="#">Histori Stok</a></li>
                              </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Penyesuaian Toko</a>
                                <ul class="submenu">
                                    <li><a href="#">Penyesuaian Toko</a></li>
                                    <li><a href="#">Barang Penyesuaian Toko</a></li>
                                </ul>
                              </li>
                          </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i> Absensi karyawan</a></li>
                    <li><a href="#"><i class="fas fa-lock"></i> Registrasi</a></li>

                </ul><!-- End navigation menu -->
            </div><!-- end navigation -->
        </div><!-- end container-fluid -->
    </div><!-- end left-sidenav-->
</div>
<!--end page-wrapper-inner -->
