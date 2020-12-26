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
                <div class="col-md text-primary mb-3">
                    <h4>Tambah Kategori</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <!-- Isi -->
                    <div class="card my-3">
                        <div class="card-body">   
                            <!-- Judul -->
                            <h5 class="mb-4">Form Tambah Ketegori</h5>
                            <!-- end Judul -->

                            <!-- form -->
                            <form action="" method="post" class="text-left">
                                <div class="form-group row">
                                    <label for="id" class="col-md-4 col-form-label">ID</label>
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="nim" id="" placeholder="ID Kategori">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label">Nama Kategori</label>
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="nama" id="" placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="text-right">
                                        <a href="<?= base_url('kategori') ?>" type="button" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                                        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end Isi -->
                </div>
            </div>
        </div>
        
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/header.php") ?>
    

</body>
</html>