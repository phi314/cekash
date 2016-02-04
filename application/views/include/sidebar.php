<!-- START PAGE SIDEBAR -->
<div class="page-sidebar page-sidebar-fixed scroll">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation x-navigation-custom">
        <li class="xn-logo">
            <a href="index.html">UNLEASHED</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?php echo base_url(IMAGES.'demo/users/avatar.jpg'); ?>" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php echo base_url(IMAGES.'demo/users/avatar.jpg'); ?>" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Ragnar Lothbrok</div>
                    <div class="profile-data-title">Cekash Developer</div>
                </div>
            </div>
        </li>
        <li>
            <a href="<?php echo base_url('home'); ?>" title="Beranda"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>
        </li>
        <li class="xn-openable">
            <a href="#" title="Products"><span class="fa fa-archive"></span> <span class="xn-text">Product</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url('product'); ?>" title="Products"><span class="xn-text">Products</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('stock'); ?>" title="Stock Control"><span class="xn-text">Stock Control</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('type'); ?>" title="Product Types"><span class="xn-text">Product Types</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('brand'); ?>" title="Brand"><span class="xn-text">Brands</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('supplier'); ?>" title="Suppliers"><span class="xn-text">Suppliers</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('tags'); ?>" title="Suppliers"><span class="xn-text">Product Tags</span></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url('user'); ?>" title="User"><span class="fa fa-user"></span> <span class="xn-text">User</span></a>
        </li>
        <li class="xn-openable">
            <a href="#" title="Laporan"><span class="fa fa-briefcase"></span> <span class="xn-text">Report</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url('report/sales'); ?>" title="Report Penjualan">Laporan Penjualan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('report/purchases'); ?>" title="Report Pembelian">Laporan Pembelian</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url('settings'); ?>" title="Pengaturan"><span class="fa fa-cog"></span> <span class="xn-text">Pengatuan</span></a>
        </li>
        <li>
            <a href="<?php echo base_url('sales'); ?>" title="Penjualan"><span class="fa fa-desktop"></span> <span class="xn-text">Penjualan</span></a>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->