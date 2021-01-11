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
                    <div class="container-fluid">
                        <!-- Search -->
                        <form action="<?= base_url('penjual') ?>" method="post">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3">
                                    <h5 class="mt-2">Pencarian</h5>
                                </div>
                                <div class="col-md-3">
                                    <select type="text" name="provinsi" id="provinsi" class="form-control selectpicker" data-live-search="true" placeholder="pilih Provinsi">
                                        <option value="">--pilih provinsi--</option>
                                        <?php foreach ($provinsi as $prov) : ?>
                                            <option value="<?= $prov->provinsi ?>" > <?= $prov->provinsi ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari penjual..">
                                        <div class="input-group-append">
                                            <input class="btn btn-primary" type="submit" name="cari" id="cari" value="Cari">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            
                                <?php foreach($penjual as $pj) : ?>
                                <a href="<?= base_url('penjual/etalase/'.$pj->id_penjual) ?>" class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="showcase rounded">  
                                                    <div class="show">
                                                        <img src="<?= base_url('img/penjual/'.$pj->gambar_penjual) ?>" alt="" class="img-fluid img-show">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5><b><?= $pj->nama_penjual ?></b></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> <?= $pj->provinsi ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 align-self-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h4 class="text-primary"><b><i class="fas fa-gift"></i> <?= $pj->jumlah_produk ?></b></h4>
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
                                <?php endforeach ?>

                            </div>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <?= $this->pagination->create_links(); ?>
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