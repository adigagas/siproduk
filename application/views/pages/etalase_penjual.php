<!-- Header -->
<?php $this->load->view("template/header.php") ?>
<!-- end Header -->

<body>

    <!-- Sidebar -->
    <?php $this->load->view("template/sidebar.php") ?>
    <!-- end Sidebar -->

    <!-- Navbar -->
    <?php $this->load->view("template/navbar.php") ?>
    <!-- end Navbar -->

    <!-- Alert -->
    <?= $this->session->flashdata('message'); ?>

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2">
                                    <img src="<?= base_url('img/penjual/'.$penjual->gambar_penjual) ?>" alt="" class="img-fluid border">
                                </div>
                                <div class="col-xl">
                                    <h5 class="">
                                        <b><?= $penjual->nama_penjual ?></b>
                                    </h5>
                                    Produk di toko ini : <?= $penjual->jumlah_produk ?>
                                    <div class="mt-4 text-secondary">
                                        <i class="fas fa-map-marker-alt"></i> <?= $penjual->provinsi ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 text-right">
                                    <a href="<?= base_url('penjual/sunting/'.$penjual->id_penjual) ?>" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('penjual/hapus/'.$penjual->id_penjual) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-12">
                    <!-- Search -->
                    <div class="row">
                        <div class="col-xl-2 col-lg-3">
                            <h5 class="mt-2">Pencarian</h5>
                        </div>
                        <div class="col-md">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari nama produk..">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Search -->

                    <!-- result info -->
                    <div class="row my-4">
                        <div class="col-lg">
                            <span class="result-note">
                                Menampilkan <b>16</b> dari <b>156</b> hasil
                            </span>
                        </div>
                    </div>
                    <!-- end result info -->

                    <!-- Item Section -->
                    <div class="row">
                        <?php foreach ($produk as $p) : ?>
                            <div class="col-xl-3 col-md-4 col-sm-2 mb-3">
                                <a href="<?= base_url('produk/detail/'.$p->id_produk) ?>" class="card card-item" id="" >
                                    <div class="img-res">
                                        <?php if(is_null($p->gambar)) : ?>
                                        <img src="<?= base_url('img/Default/buku.png') ?>" class="img-fluid" alt="">
                                        <?php else : ?>
                                            <img src="<?= base_url('img/produk/'.$p->gambar) ?>" class="img-fluid" alt="">
                                        <?php endif ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <?= $p->nama_produk ?>
                                        </div>
                                        <div class="item-price">
                                            <small class="text-dark" >Mulai dari</small>
                                            <br>
                                            <small>Rp</small> <?= number_format($p->harga_terendah, 0, ',', '.') ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>
                    <!-- end Item Section -->

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                    <!-- end Pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>