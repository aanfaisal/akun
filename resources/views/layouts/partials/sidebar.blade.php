<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i><span>Home</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/nonota') }}"><i class="fa fa-circle-o"></i>Nomor Nota</a></li>
                    <li><a href="{{ url('/barang') }}"><i class="fa fa-circle-o"></i>Data Barang</a></li>
                    <li><a href="{{ url('/supplaier') }}"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
                    <li><a href="{{ url('/user') }}"><i class="fa fa-circle-o"></i>Data User</a></li>
                    <li><a href="{{ url('/akun') }}"><i class="fa fa-circle-o"></i>Data Akun COA</a></li>
                </ul>
            </li>
                        <li class="treeview">
                <a href="#"><i class='fa fa-trophy'></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                <li><a href="{{ url('/kartustok') }}"><i class="fa fa-circle-o"></i>Data Stok Barang</a></li>
                    <li><a href="{{ url('/pembelian') }}"><i class="fa fa-circle-o"></i>Pembelian</a></li>
                    <li><a href="{{ url('/penjualan') }}"><i class="fa fa-circle-o"></i>Penjualan</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-cloud'></i> <span>Jurnal</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/jurnalumum') }}"><i class="fa fa-circle-o"></i>Jurnal Umum</a></li>
                    <li><a href="{{ url('/jurnalpembelian') }}"><i class="fa fa-circle-o"></i>Jurnal Pembelian</a></li>
                    <li><a href="{{ url('/pengeluarankas') }}"><i class="fa fa-circle-o"></i>Jurnal Pengeluaran Kas</a></li>
                    <li><a href="{{ url('/jurnalpenjualan') }}"><i class="fa fa-circle-o"></i>Jurnal Penjualan</a></li>
                    <li><a href="{{ url('/penerimaankas') }}"><i class="fa fa-circle-o"></i>Jurnal Penerimaan Kas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-edit'></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/laporanstok') }}"><i class="fa fa-circle-o"></i>Laporan Stok Barang</a></li>
                    <li><a href="{{ url('/laporanpenjualan') }}"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
                    <li><a href="{{ url('/laporanpembelian') }}"><i class="fa fa-circle-o"></i>Laporan Pembelian</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
