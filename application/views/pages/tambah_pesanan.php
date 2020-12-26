<!-- Header -->
<?php $this->load->view("template/header.php") ?>
<!-- end Header -->

<body>

    <!-- sidebar -->
    <?php $this->load->view("template/sidebar.php") ?>
    <!-- end sidebar -->

    <!-- navbar -->
    <?php $this->load->view("template/navbar.php") ?>
    <!-- end navbar -->

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-primary mb-3">
                    <h4>Tambah Pesanan</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Form Pesanan Baru</b></h5>
                            
                            <form action="">
                                <div class="form-group row">
                                    <label for="nama_toko" class="col-xl-2 col-form-label">Nama Toko</label>
                                    <input type="text" name="nama_toko" id="nama_toko" class="col-xl-4 form-control">
                                </div>
                                <div class="form-group row">
                                    <label for="no_resi" class="col-xl-2 col-form-label">No. Resi</label>
                                    <input type="text" name="no_resi" id="no_resi" class="col-xl-4 form-control">
                                </div>
                                <table class="table mt-5" id="crud_table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="35%">Nama Produk</th>
                                            <th width="10%">Banyak</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class='align-middle'>
                                                <i class='fas fa-receipt'></i>
                                            </td>
                                            <td>
                                                <input type='text' name='nama_item' id='nama_item' class='form-control'>
                                            </td>
                                            <td>
                                                <input type='number' name='jumlah_beli' id='jumlah_beli' class='form-control'>
                                            </td>
                                            <td>
                                                <input type='number' name='harga_satuan' id='harga_satuan' class='form-control'>
                                            </td>
                                            <td>
                                                <input type='text' name='total_harga' id='total_harga' class='form-control' disabled>
                                            </td>
                                            <td class='text-right'>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td class="text-right">
                                            <button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                        </td>
                                    </tr>
                                </table>

                                <div class="d-flex justify-content-end">
                                    <a href="<?= base_url('transaksi/detail') ?>" class="btn btn-outline-secondary mr-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            </form>
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