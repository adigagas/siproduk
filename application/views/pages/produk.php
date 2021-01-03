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
    <div class="card-notif notif-success" id="notif">
        <div class="notif-icon">
            <i class="fas fa-folder-plus"></i>
        </div>
        <div class="notif-body">
            <div class="notif-title">
                Berhasil !
            </div>
            <small>
                Berhasil menambah data
            </small>
        </div>
        <button class="notif-close" onclick="notif_close()"><i class="fas fa-times"></i></button>
    </div>
    <!-- end alert -->

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
                                <select type="text" id="kategori" class="form-control selectpicker" data-live-search="true">
                                    <option value="">--pilih kategori--</option>
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?></option>
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
                            <form action="<?= base_url('produk') ?>" method="post">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-3">
                                        <h5 class="mt-2">Pencarian</h5>
                                    </div>
                                    <div class="col-md">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" value="<?= $keyword ?>" id="keyword" name="keyword" placeholder="Cari kategori..">
                                            <div class="input-group-append">
                                                <input class="btn btn-primary" type="submit" name="cari" id="cari" value="cari">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                        <div class="col-xl-3 col-lg-6 text-right">
                            <a href="<?= base_url("produk/tambah") ?>" class="btn btn-outline-primary">
                                <i class="fas fa-plus"></i> Produk Baru
                            </a>
                        </div>
                    </div>
                    <!-- end result info -->

                    <!-- Item Section -->
                    <div class="row">

                        <?php foreach ($produk as $p) : ?>
                        <div class="col-xl-3 col-md-4 col-sm-2">
                            <a href="<?= base_url() ?>produk/detail<?= $p->id_produk ?>" class="card card-item" id="" >
                                <div class="img-res">
                                    <img src="<?= base_url() ?>img/produk/<?= $p->gambar ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <?= $p->nama_produk ?>
                                    </div>
                                    <div class="item-price">
                                        <small>Rp</small> 100.000 ~ <small>Rp</small> 5.000.000
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
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="fas fa-angle-double-left"></i></span>
                                    </li>

                                    <li class="page-item"><a class="page-link" href="#">1</a></li>

                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">
                                            2
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>

                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                    </li>
                                    
                                </ul>
                            </nav>
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