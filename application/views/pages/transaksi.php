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
                    <h4>Transaksi</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Search -->
                            <div class="row">
                                <div class="col-xl-2 col-lg-3">
                                    <h5 class="mt-2">Pencarian</h5>
                                </div>
                                <div class="col-md">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari nama produk..">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Search -->

                            <!-- result info -->
                            <div class="row my-4">
                                <div class="col-lg">
                                    <span class="result-note">
                                        Menampilkan <b>16</b> dari <b>156</b> hasil
                                    </span>
                                </div>
                                <div class="col-xl-3 col-lg-6 text-right">
                                    <a href="<?= base_url('transaksi/tambah') ?>" class="btn btn-outline-primary">
                                        <i class="fas fa-plus"></i> Transaksi Baru
                                    </a>
                                </div>
                            </div>
                            <!-- end result info -->

                            <!-- Table -->
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">TGL TANSAKSI</th>
                                        <th scope="col">PENERIMA</th>
                                        <th scope="col">JUMLAH</th>
                                        <th scope="col" style="min-width: 160px;">DOKUMEN</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">0001</th>
                                        <td class="align-middle text-center">01/11/2020</td>
                                        <td class="align-middle">
                                            Monika Kusuma Dewi
                                            <br>
                                            Perumahan Jember
                                            <br>
                                            0812123456
                                        </td>
                                        <td class="text-primary align-middle text-center"><b>Rp. 500.000</b></td>
                                        <td class="align-middle">
                                            <div class="progress rounded-pill">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 87.5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">87%</div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-secondary">
                                            <i class="fas fa-truck"></i> Terkirim
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('transaksi/detail') ?>" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">0002</th>
                                        <td class="align-middle text-center">02/11/2020</td>
                                        <td class="align-middle">
                                            Dwi Ayu Wulandari
                                            <br>
                                            Pasuruan
                                            <br>
                                            0812123456
                                        </td>
                                        <td class="text-primary align-middle text-center"><b>Rp. 710.000</b></td>
                                        <td class="align-middle">
                                            <div class="progress rounded-pill">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-secondary">
                                            <i class="fas fa-clock"></i> Pending
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">0003</th>
                                        <td class="align-middle text-center">03/11/2020</td>
                                        <td class="align-middle">
                                            Gagas Adi Rismawan
                                            <br>
                                            Bondowoso
                                            <br>
                                            0812123456
                                        </td>
                                        <td class="text-primary align-middle text-center"><b>Rp. 3.720.000</b></td>
                                        <td class="align-middle">
                                            <div class="progress rounded-pill">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-secondary">
                                            <i class="fas fa-box"></i> Sebagian
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">0004</th>
                                        <td class="align-middle text-center">04/11/2020</td>
                                        <td class="align-middle">
                                            Yosef Yoga Himawan
                                            <br>
                                            Sukorejo, Jember - Jawa Timur
                                            <br>
                                            0812123456
                                        </td>
                                        <td class="text-primary align-middle text-center"><b>Rp. 1.770.000</b></td>
                                        <td class="align-middle">
                                            <div class="progress rounded-pill">
                                                <div class="progress-bar bg-orange" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-secondary">
                                            <i class="fas fa-clock"></i> Pending
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">0005</th>
                                        <td class="align-middle text-center">05/11/2020</td>
                                        <td class="align-middle">
                                            Aprilia Angger
                                            <br>
                                            Lowokwaru, Kota Malang - Jawa Timur
                                            <br>
                                            0812123456
                                        </td>
                                        <td class="text-primary align-middle text-center"><b>Rp. 2.110.000</b></td>
                                        <td class="align-middle">
                                            <div class="progress rounded-pill">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-secondary">
                                            <i class="fas fa-clock"></i> Pending
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="" class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end Table -->

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link"><i class="fas fa-angle-double-left"></i></span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    2
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- end Pagination -->
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