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

    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-primary mb-3">
                    <h4>Tambah Penjual</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('penjual/tambah') ?>" enctype="multipart/form-data" method="post">
                                <h5 class="card-title">
                                    <b>Informasi Penjual</b>
                                </h5>
                                <div class="form-group row">
                                    <label for="nama_penjual" class="col-xl-4">Nama Toko/Penjual</label>
                                    <div class="col-xl">
                                        <input type="text" id="nama_penjual" name="nama_penjual" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="provinsi" class="col-xl-4">Alamat (provinsi)</label>
                                    <div class="col-xl">
                                        <input type="text" id="provinsi" name="provinsi" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-4">
                                        <label for="">Gambar</label>
                                    </div>
                                    <div class="col-xl">
                                        <div class="file-img">
                                            <div class="img-preview">
                                                <img src="<?= base_url('img/Default/pilih gambar.png') ?>" class="img-fluid" id="img_preview" alt="" width="40%">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar_penjual" name="gambar_penjual" onchange="preview(this)" accept="image/*">
                                                <label class="custom-file-label" for="gambar_penjual">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col text-right">
                                        <a href="<?= base_url('penjual') ?>" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                                        <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>