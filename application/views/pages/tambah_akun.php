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
                    <form action="" method="post" class="text-left" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="nama" class="col-xl-3 col-form-label">Username</label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username Baru" value="<?= set_value ('username'); ?>">
                                <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-xl-3 col-form-label">Password</label>
                            <div class="col-xl">
                                <input type="password" class="form-control" name="password1" id="password" placeholder="Password Baru">
                                <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-xl-3 col-form-label">Konfirmasi Password</label>
                            <div class="col-xl">
                                <input type="password" class="form-control" name="password2" id="" placeholder="Konfirmasi Password Baru">
                                <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-xl-3 col-form-label">Nama </label>
                            <div class="col-xl">
                                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Baru" value="<?= set_value ('nama_user'); ?>">
                                <?php echo form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                        <input type="file" class="custom-file-input" id="foto_user" name="foto_user" onchange="preview(this)" accept="image/*">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('akun') ?>" button type="button" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left"></i> Kembali</button>
                            </a>
                            <button type="submit" class="btn btn-primary" ><i class="fas fa-save" ></i> Simpan</button>
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