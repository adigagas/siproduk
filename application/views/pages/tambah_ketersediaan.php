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
                <div class="col-xl text-primary mb-3">
                    <h4>Tambah Ketersediaan</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <b>Form Tambah Ketersediaan</b>
                            </h5>

                            <!-- form -->
                            <form action="<?= base_url('produk/tambah_ketersediaan') ?>" method="post" class="text-left">
                                <!-- <input type="text" id="id_ketersediaan" hidden> -->
                                <input type="text" name="id_produk" value="<?= $produk->id_produk ?>">
                                <div class="form-group row">
                                    <label for="id_penjual" class="col-xl-3 col-form-label">Toko/Penjual</label>
                                    <div class="col-xl-5">
                                        <select type="text" id="id_penjual" name="id_penjual" class="form-control selectpicker" data-live-search="true">
                                            <option value="">--pilih Toko/Penjual--</option>
                                            <?php foreach($penjual as $pj) : ?>
                                                <option value="<?= $pj->id_penjual ?>"><?= $pj->nama_penjual ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="situs" class="col-xl-3 col-form-label">Situs/Sumber</label>
                                    <div class="col-xl-5">
                                        <input type="text" class="form-control" name="situs" id="" placeholder="Situs">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tautan_produk" class="col-xl-3 col-form-label">Tautan Produk</label>
                                    <div class="col-xl">
                                        <input type="text" class="form-control" name="tautan_produk" id="" placeholder="Tautan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_satuan" class="col-xl-3 col-form-label">Harga Satuan</label>
                                    <div class="col-xl-5">
                                        <input type="number" class="form-control" name="harga_satuan" id="" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-xl-3 col-form-label">Stok Produk</label>
                                    <div class="col-xl-2">
                                        <input type="text" class="form-control" name="stok" id="" placeholder="Stok">
                                    </div>
                                </div>
                                <div class="text-right">
                                        <a href="<?= base_url('produk/detail/').$produk->id_produk ?>" type="button" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Batal </a>
                                        <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>