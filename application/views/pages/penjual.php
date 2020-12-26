<!-- Headaer -->
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
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Search -->
                    <div class="container-fluid">
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
                            <div class="col-xl-3 col-lg-6 text-right">
                                <a href="<?= base_url('penjual/tambah') ?>" class="btn btn-outline-primary">
                                    <i class="fas fa-plus"></i> Penjual Baru
                                </a>
                            </div>
                        </div>
                        <!-- end result info -->
                    </div>

                    <!-- Content Fill -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?= base_url('penjual/etalase') ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/Default/Logo Brand.jpg') ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b>Araya Media Computer</b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Jawa Timur</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> 20</b></h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary">Produk</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
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
                    <!-- end Content Fill -->
                </div>
            </div>
        </div>

    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>