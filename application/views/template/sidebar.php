<nav class="sidebar" id="sidebar">
    <div class="sidebar-header">
        ADMIN
    </div>
    <ul class="sidebar-menu">
        <li class="<?php if($this->uri->segment(1) == 'dashboard'){ echo 'active'; } ?>">
            <a href="<?= base_url('dashboard') ?>">
                <i class="icon-16 fas fa-columns"></i> Dashboard
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'produk'){ echo 'active'; } ?>">
            <a href="<?= base_url('produk') ?>">
                <i class="icon-16 fas fa-gift"></i> Produk
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'kategori'){ echo 'active'; } ?>">
            <a href="<?= base_url('kategori') ?>">
                <i class="icon-16 fas fa-tag"></i> Kategori
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'penjual'){ echo 'active'; } ?>">
            <a href="<?= base_url('penjual') ?>">
                <i class="icon-16 fas fa-store"></i> Penjual
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'pembeli'){ echo 'active'; } ?>">
            <a href="<?= base_url('pembeli') ?>">
                <i class="icon-16 fas fa-users"></i> Pembeli
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'transaksi'){ echo 'active'; } ?>">
            <a href="<?= base_url('transaksi') ?>">
                <i class="icon-16 fas fa-clipboard-check"></i> Transaksi
            </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'akun'){ echo 'active'; } ?>">
            <a href="<?= base_url('akun') ?>">
                <i class="icon-16 fas fa-key"></i> Akun
            </a>
        </li>
    </ul>
</nav>