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

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-primary mb-3">
                    <h4>Tambah Produk</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form action="sukses.html" method="">
                <div class="row">
                    <div class="col-xl">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>Informasi Produk</b>
                                </h5>
                                <div class="form-group row">
                                    <label for="no_sku" class="col-xl-3">No SKU</label>
                                    <div class="col-xl">
                                        <input type="text" id="no_sku" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_produk" class="col-xl-3">Nama Produk</label>
                                    <div class="col-xl">
                                        <input type="text" id="nama_produk" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-xl-3">Merek</label>
                                    <div class="col-xl">
                                        <input type="text" id="merek" class="form-control">
                                    </div>
                                </div>
                                    
                                <div class="form-group row">
                                    <label for="kondisi" class="col-xl-3">Kondisi</label>
                                    <div class="col-xl">
                                        <input type="text" id="kondisi" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="garansi" class="col-xl-3">Garansi</label>
                                    <div class="col-xl">
                                        <input type="text" id="garansi" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-shadow mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Deskripsi
                                </b></h5>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-xl-3">Deskripsi</label>
                                    <div class="col-xl">
                                        <textarea type="text" id="deskripsi" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Dimensi Produk
                                </b></h5>
                                <div class="form-group row">
                                    <label for="panjang" class="col-xl-3">Panjang</label>
                                    <div class="col-xl">
                                        <input type="text" id="panjang" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi" class="col-xl-3">Tinggi</label>
                                    <div class="col-xl">
                                        <input type="text" id="tinggi" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat" class="col-xl-3">Berat</label>
                                    <div class="col-xl">
                                        <input type="text" id="berat" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-shadow mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Gambar
                                </b></h5>
                                <div class="form-group row">
                                    <div class="col-xl">
                                        <div class="file-img">
                                            <div class="img-preview">
                                                <img src="../img/Default/pilih gambar.png" class="img-fluid" id="img_preview" alt="">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="filename" onchange="preview(this)" accept="image/*">
                                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="form-group row mt-3">
                            <div class="col text-right">
                                <a href="produk.html" class="btn btn-lg btn-outline-secondary mr-3"><i class="fas fa-arrow-left mr-3"></i>Kembali</a>
                                <button class="btn btn-lg btn-primary" type="submit"><i class="fas fa-save mr-3"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>