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
            <div class="row mb-3 justify-content-center">
                <div class="col-xl-6">
                    <form action="detail-transaksi.html" method="">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">
                                            <b>Informasi Transaksi</b>
                                        </h5>
                                        <div class="form-group row">
                                            <label for="id_transaksi" class="col-xl-3">ID Transaksi</label>
                                            <div class="col-xl">
                                                <input type="text" id="id_transaksi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_transaksi" class="col-xl-3">Tgl Transaksi</label>
                                            <div class="col-xl">
                                                <input type="date" id="tgl_transaksi" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title"><b>
                                            Informasi Penerima
                                        </b></h5>
                                        <div class="form-group row">
                                            <label for="nama_penerima" class="col-xl-3">Nama Penerima</label>
                                            <div class="col-xl">
                                                <input type="text" id="nama_produk" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="provinsi" class="col-xl-3">Provinsi</label>
                                            <div class="col-xl-6">
                                                <input type="text" id="provinsi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kabupaten_kota" class="col-xl-3">Kabupaten/Kota</label>
                                            <div class="col-xl-6">
                                                <input type="text" id="kabupaten_kota" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kodepos" class="col-xl-3">Kodepos</label>
                                            <div class="col-xl-6">
                                                <input type="text" id="kodepos" class="form-control">
                                            </div>
                                        </div>
    
                                        <div class="form-group row">
                                            <label for="alamat_penerima" class="col-xl-3">Alamat Lengkap</label>
                                            <div class="col-xl">
                                                <textarea type="text" id="alamat_penerima" class="form-control"></textarea>
                                            </div>
                                        </div>
    
                                        <div class="form-group row">
                                            <div class="col text-right">
                                                <a href="<?= base_url('transaksi') ?>" class="btn btn-outline-secondary mr-3"><i class="fas fa-arrow-left mr-3"></i>Kembali</a>
                                                <button class="btn btn-primary" type="submit"><i class="fas fa-save mr-3"></i>Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
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