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

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2">
                                    <img src="../img/Default/Logo Brand.jpg" alt="" class="img-fluid border">
                                </div>
                                <div class="col-xl">
                                    <h5 class="">
                                        <b>Araya Computer</b>
                                    </h5>
                                    Produk di toko ini : 11
                                    <div class="mt-4 text-secondary">
                                        <i class="fas fa-map-marker-alt"></i> Jawa Timur
                                    </div>
                                </div>
                                <div class="col-xl-2 text-right">
                                    <a href="<?= base_url('penjual/sunting') ?>" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                        <div class="col-xl-3">
                            <a href="<?= base_url('produk/detail') ?>" class="card card-item" id="">
                                <div class="img-res">
                                    <img src="<?= base_url('img/Default/Buku.jpg') ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        Buku Tulis
                                    </div>
                                    <div class="item-price">
                                        <small>Rp</small> 100.000 ~ <small>Rp</small> 5.000.000
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3">
                            <a href="<?= base_url('produk/detail') ?>" class="card card-item" id="">
                                <div class="img-res">
                                    <img src="<?= base_url('img/Default/Buku.jpg') ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        Buku Tulis
                                    </div>
                                    <div class="item-price">
                                        <small>Rp</small> 100.000 ~ <small>Rp</small> 5.000.000
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3">
                            <a href="<?= base_url('produk/detail') ?>" class="card card-item" id="">
                                <div class="img-res">
                                    <img src="<?= base_url('img/Default/Buku.jpg') ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        Buku Tulis
                                    </div>
                                    <div class="item-price">
                                        <small>Rp</small> 100.000 ~ <small>Rp</small> 5.000.000
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3">
                            <a href="<?= base_url('produk/detail') ?>" class="card card-item" id="">
                                <div class="img-res">
                                    <img src="<?= base_url('img/Default/Buku.jpg') ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        Buku Tulis
                                    </div>
                                    <div class="item-price">
                                        <small>Rp</small> 100.000 ~ <small>Rp</small> 5.000.000
                                    </div>
                                </div>
                            </a>
                        </div>
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