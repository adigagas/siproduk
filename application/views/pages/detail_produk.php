<!-- header -->
<?php $this->load->view("template/header.php") ?>
<!-- end header -->

<body>

    <!-- Sidebar -->
    <?php $this->load->view("template/sidebar.php") ?>
    <!-- end Sidebar -->

    <!-- Navbar -->
    <?php $this->load->view("template/navbar.php") ?>
    <!-- end Navbar -->

    <!-- Content -->
    <div class="content" id="content">

        <!-- Page Title -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-accent mb-3">
                    <h4 class="text-primary">Detail Produk</h4>
                </div>
            </div>
        </div>

        <!-- Content Fill -->
        <div class="container-fluid">
            <div class="row">
                <!-- Produk -->
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="showcase">  
                                        <div class="show">
                                            <?php if(is_null($produk->gambar)) : ?>
                                                <img src="<?= base_url('img/Default/Buku.jpg') ?>" alt="" class="img-fluid img-show">
                                                <?php else : ?>
                                                    <img src="<?= base_url('img/produk/'.$produk->gambar ) ?>" alt="" class="img-fluid img-show">
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="produk-info">
                                        <div class="produk-header">
                                            <h4 class="produk-title">
                                                <?= $produk->nama_produk ?>
                                            </h4>
                                            <div class="produk-sub-title">
                                                Merek/Penerbit <b><?= $produk->merek ?></b>
                                            </div>
                                        </div>
                                        <div class="produk-body">
                                            <span>Harga</span>
                                            <h4 class="produk-price">
                                                Rp. 500.000 ~ Rp. 540.000
                                            </h4>
                                            <small>
                                                <i>Harga dapat di cek di toko melalui link di samping</i>
                                            </small>
                                        </div>
                                        <div class="produk-footer">
                                            <a href="<?= base_url('produk/sunting'.$produk->id_produk) ?>" class="btn btn-secondary">
                                                <i class="fas fa-edit"></i> Sunting
                                            </a>
                                            <a href="" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="section">
                                <h5 class="card-title">
                                    Informasi Produk
                                </h5>
                                <table class="desc-table">
                                    <tr>
                                        <td class="desc-title">No SKU</td>
                                        <td width>:</td>
                                        <td><?= $produk->no_sku ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Kategori</td>
                                        <td>:</td>
                                        <td><?= $produk->nama_kategori ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Merek/Penerbit</td>
                                        <td>:</td>
                                        <td><?= $produk->merek ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Kondisi</td>
                                        <td>:</td>
                                        <td><?= $produk->kondisi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Garansi</td>
                                        <td>:</td>
                                        <td><?= $produk->garansi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Panjang</td>
                                        <td>:</td>
                                        <td><?= $produk->panjang ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Lebar</td>
                                        <td>:</td>
                                        <td><?= $produk->lebar ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Tinggi</td>
                                        <td>:</td>
                                        <td><?= $produk->tinggi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="desc-title">Berat</td>
                                        <td>:</td>
                                        <td><?= $produk->berat ?></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="section">
                                <h5 class="card-title">
                                    Deskripsi
                                </h5>
                                <p>
                                    <?= $produk->deskripsi ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Produk -->


                <!-- Penjual -->
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                <div class="row">
                                    <div class="col">
                                        Penjual
                                    </div>
                                    <div class="col text-right">
                                        <a href="<?= base_url('produk/tambah_ketersediaan') ?>" class="btn btn-sm btn-outline-primary text-right"><i class="fas fa-plus"></i></a>     
                                    </div>
                                </div>
                            </h5>

                            <ul class="store-list">

                                <?php foreach($ketersediaan as $kt) : ?>
                                <li>
                                    <div class="store-header">
                                        <?php if(is_null($kt->gambar_penjual)) : ?>
                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid">
                                            <?php else : ?>
                                            <img src="<?= base_url('img/penjual/'.$kt->gambar_penjual) ?>" alt="" class="img-fluid">
                                        <?php endif ?>
                                        <h6 class="store-title"><?= $kt->nama_penjual ?>
                                            <br>
                                            <a href="<?= base_url('produk/sunting_ketersediaan/'.$kt->id_ketersediaan) ?>" class="btn btn-sm btn-outline-secondary text-right mt-2"><i class="fas fa-edit"></i></a>
                                        </h6>
                                    </div>
                                    <div class="store-body">
                                        <span><small>stok produk di toko ini</small></span>
                                        <h6>
                                            <b><?= $kt->stok ?></b> <small>pcs</small>
                                        </h6>
                                        <span><small>harga di toko ini</small></span>
                                        <h6 class="store-price">
                                            Rp. <?= number_format($kt->harga_satuan, 0, ',', '.') ?>
                                        </h6>
                                    </div>
                                    <div class="store-footer">
                                        <span><small class="text-secondary">update terakhir <b><?= $kt->log_date ?> <?= $kt->log_time ?></b></small></span>
                                        <a href="<?= $kt->tautan_produk ?>" class="btn btn-primary"><?= $kt->situs ?></a>
                                    </div>
                                </li>
                                <?php endforeach ?>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- end Penjual -->
            </div>
        </div>
        
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>