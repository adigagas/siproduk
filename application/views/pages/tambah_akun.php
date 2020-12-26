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
    <div class="container content" id="content">
        <div class="col-md text-primary mb">
            <h4>Tambah Akun Baru</h4>
        </div>
        <div class="row">
            <div class="col-xl-6 col lg-8">    
                <div class="card card-body my-3">
                    <h5 class="card-title">
                        <b>Informasi Akun</b>
                    </h5>
                    <form action="" method="post" class="text-left">
                        <div class="form-group row">
                            <label for="id" class="col-xl-3 col-form-label">ID</label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="nim" id="" placeholder="User001">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-xl-3 col-form-label">Username</label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="nama" id="" placeholder="Username Baru">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-xl-3 col-form-label">Password</label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="jurusan" id="" placeholder="Password Baru">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="akun" class="col-xl-3 col-form-label">Nama </label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="akun" id="" placeholder="Nama Baru">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-xl-3 col-form-label">Foto</label>
                            <div class="col-xl">
                                <div class="file-img">
                                    <div class="img-preview">
                                        <img src="../img/Default/pilih gambar.png" class="img-fluid" id="img_preview" alt="" width="60%">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="filename" onchange="preview(this)" accept="image/*">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('akun') ?>" button type="button" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left"></i> Kembali</button>
                            </a>
                            <button type="button" class="btn btn-primary" ><i class="fas fa-save" ></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>