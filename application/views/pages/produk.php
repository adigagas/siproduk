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

    <!-- alert -->
    <?= $this->session->flashdata('message'); ?>
    <!-- end alert -->

    <form action="<?= base_url('produk') ?>" method="post">
        <!-- Content -->
        <div class="content" id="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <!-- Filter Section -->
                    <div class="col-xl-3 col-lg-4 col-md-12 mb-4">
                        <div class="text-right">
                            <button class="btn btn-outline-secondary filter-btn mb-3" id="toggle-filter" value="open" onclick="toggle_filter()">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                        </div>
                        <div class="card filter-card" id="filter">
                            <div class="card-body">
                                <h5 class="card-title"><b>Harga</b></h5>
                                <h6 class="card-subtitle mb-2 text-muted">filter harga</h6>
                                <div class="form-group">
                                    <input type="number" class="form-control"  id="hargamin" placeholder="Harga Minimal Rp.">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="hargamax" placeholder="Harga Maksimal Rp.">
                                </div>
                                <i><small class="text-danger">* harga maksimal harus lebih tinggi dari harga minimal</small></i>
                                <hr>

                                <h5 class="card-title"><b>Kategori</b></h5>
                                <h6 class="card-subtitle mb-2 text-muted">filter katergori</h6>
                                <div class="form-group">
                                    <select type="text" name="f_kategori" id="kategori" class="form-control selectpicker" data-live-search="true">
                                        <option value="">--pilih kategori--</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k->id_kategori ?>" > <?= $k->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <hr>

                                <h5 class="card-title"><b>Lokasi</b></h5>
                                <h6 class="card-subtitle mb-2 text-muted">filter lokasi</h6>
                                <div class="form-group">
                                    <select type="text" id="provinsi" class="form-control selectpicker" data-live-search="true">
                                        <option value="">--pilih provinsi--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Filter Section -->

                    <div class="col">
                        <!-- Search -->
                        <div class="row">
                            <div class="col">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-3">
                                            <h5 class="mt-2">Pencarian</h5>
                                        </div>
                                        <div class="col-md">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="" id="keyword" name="keyword" placeholder="Cari kategori..">
                                                <div class="input-group-append">
                                                    <input class="btn btn-primary" type="submit" name="cari" id="cari" value="Cari">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- end Search -->

                        <!-- result info -->
                        <div class="row my-4">
                            <div class="col-lg">
                                <span class="result-note">
                                    Menampilkan <b><?php if($total_rows<$per_page) {echo $total_rows; } else { echo $per_page; } ?></b> dari <b><?= $total_rows ?></b> hasil <?php if(isset($keyword) || isset($f_kategori)){ echo 'pencarian '; } ?> <b class="text-primary"><?php if(isset($f_kategori)){ echo $f_kategori; } ?></b> <b class="text-primary"><?php if(isset($keyword)){ echo $keyword; } ?></b>
                                </span>
                            </div>
                            <div class="col-lg text-right">
                                <a href="<?= base_url("produk/tambah") ?>" class="btn btn-outline-primary">
                                    <i class="fas fa-plus"></i> Produk Baru
                                </a>
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
    </form>

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>