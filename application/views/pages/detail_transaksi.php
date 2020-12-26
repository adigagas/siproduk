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
                    <h4>Detail Transaksi</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">
                                        <b>Informasi Transaksi</b>
                                    </h5>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td class="text-secondary">ID Transaksi</td>
                                                <td>:</td>
                                                <td>0001</td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary">Tanggal</td>
                                                <td>:</td>
                                                <td>06-11-2020</td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary">Nama Penerima</td>
                                                <td>:</td>
                                                <td>Monika Kusuma Dewi</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <a href="<?= base_url('transaksi/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i> Sunting</a>
                                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col">
                                    <h5 class="card-title">
                                        <b>Alamat Penerima</b>
                                    </h5>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td class="text-secondary">Provinsi</td>
                                                <td>:</td>
                                                <td>Jawa Timur</td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary">Kabupaten/Kota</td>
                                                <td>:</td>
                                                <td>Jember</td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary">Kode Pos</td>
                                                <td>:</td>
                                                <td>12379</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-secondary">Alamat Lengkap</td>
                                                <td>:</td>
                                                <td>
                                                    Perumahan Jember Indah Blok AA01
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <h5 class="card-title">
                                        <b>Dokumen Transaksi</b>
                                    </h5>
                                    <div class="progress-dokumen">
                                        <span>Progress</span>
                                        <div class="progress rounded-pill">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 87.5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">87%</div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <table class="table table-borderless">
                                                <tr class="form-group">
                                                    <td width="200px">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="berita_acara" checked disabled>
                                                            <label class="custom-control-label" for="berita_acara">
                                                                Berita Acara
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="10px">:</td>
                                                    <td>
                                                        berita_acara_smp01_20-09-2020.pdf
                                                        <a href="" class="btn btn-icon btn-secondary"><i class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="spk" disabled>
                                                            <label class="custom-control-label" for="spk">
                                                                SPK
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-upload"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="kuitansi_siplah" disabled>
                                                            <label class="custom-control-label" for="kuitansi_siplah">
                                                                Kuitansi SIPLah
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-upload"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="surat_tagihan" disabled>
                                                            <label class="custom-control-label" for="surat_tagihan">
                                                                Surat Tagihan
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-upload"></i></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col">
                                            <table class="table table-borderless">
                                                <tr class="form-group">
                                                    <td width="200px">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="kuitansi_araya" checked disabled>
                                                            <label class="custom-control-label" for="kuitansi_araya">
                                                                Kuitansi Araya
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="10px">:</td>
                                                    <td>
                                                        <a href="<?= base_url('transaksi/kuitansi') ?>" class="btn btn-icon btn-primary"><i class="fas fa-print"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="faktur_pajak" disabled>
                                                            <label class="custom-control-label" for="faktur_pajak">
                                                                Faktur Pajak
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-upload"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="bukti_pembayaran" disabled>
                                                            <label class="custom-control-label" for="bukti_pembayaran">
                                                                Bukti Pembayaran
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-upload"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="form-group">
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="invoice" checked disabled>
                                                            <label class="custom-control-label" for="invoice">
                                                                Invoice
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="" class="btn btn-icon btn-primary"><i class="fas fa-print"></i></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title">
                                                <b>Pesanan</b>
                                            </h5>
                                        </div>
                                        <div class="col text-right">
                                            <a href="<?= base_url('transaksi/tambah_pesanan') ?>" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Tambah Pesanan</a>
                                        </div>
                                    </div>

                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <td colspan="3">
                                                    <p>
                                                        <h5>Toko : Araya Computer</h5>
                                                    </p>
                                                    <p>
                                                        No. Resi : <b>238664975862548763</b>
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <a href="<?= base_url('transaksi/sunting_pesanan') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    SSD SATA III 265GB Patriot 
                                                </th>
                                                <td class="text-right">
                                                    Rp 500.000
                                                </td>
                                                <td class="text-center">
                                                    x1
                                                </td>
                                                <td class="text-right">
                                                    Rp 500.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    SSD SATA III 512GB Patriot 
                                                </th>
                                                <td class="text-right">
                                                    Rp 1.500.000
                                                </td>
                                                <td class="text-center">
                                                    x2
                                                </td>
                                                <td class="text-right">
                                                    Rp 3.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ongkos Kirim
                                                </th>
                                                <td class="text-right">
                                                    Rp 40.000
                                                </td>
                                                <td class="text-center">
                                                    x1
                                                </td>
                                                <td class="text-right">
                                                    Rp 40.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="3">
                                                    <h5><b>SUB TOTAL</b></h5>
                                                </th>
                                                <th class="text-right">
                                                    <h5><b>Rp 4.540.000</b></h5>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <td colspan="3">
                                                    <p>
                                                        <h5>Toko : Araya Computer</h5>
                                                    </p>
                                                    <p>
                                                        No. Resi : <b>238664975862548763</b>
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <a href="" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    SSD SATA III 265GB Patriot 
                                                </th>
                                                <td class="text-right">
                                                    Rp 500.000
                                                </td>
                                                <td class="text-center">
                                                    x1
                                                </td>
                                                <td class="text-right">
                                                    Rp 500.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    SSD SATA III 512GB Patriot 
                                                </th>
                                                <td class="text-right">
                                                    Rp 1.500.000
                                                </td>
                                                <td class="text-center">
                                                    x2
                                                </td>
                                                <td class="text-right">
                                                    Rp 3.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ongkos Kirim
                                                </th>
                                                <td class="text-right">
                                                    Rp 40.000
                                                </td>
                                                <td class="text-center">
                                                    x1
                                                </td>
                                                <td class="text-right">
                                                    Rp 40.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="3">
                                                    <h5><b>SUB TOTAL</b></h5>
                                                </th>
                                                <th class="text-right">
                                                    <h5><b>Rp 4.540.000</b></h5>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th colspan="3">
                                                    <h4><b>GRAND TOTAL</b></h4>
                                                </th>
                                                <th class="text-right">
                                                    <h4><b>Rp 4.540.000</b></h4>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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