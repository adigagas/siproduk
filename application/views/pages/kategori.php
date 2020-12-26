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

    <!-- Modal Hapus -->
    <div class="modal fade" id="hapus" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title"><i class="fas fa-times-circle"></i><b> Hapus Data Kategori</b></h5>
                </div>
                <div class="modal-body text-left">
                    <p>Apakah anda yakin ingin menghapus?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger"  data-dismiss="modal">Ya, hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal Hapus -->

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-primary mb-3">
                    <h4>Kategori</h4>
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
                                        <input type="text" class="form-control" placeholder="Cari kategori..">
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
                                        Menampilkan <b>10</b> dari <b>57</b> hasil
                                    </span>
                                </div>
                                <div class="col-xl-3 col-lg-6 text-right">
                                    <a href="<?= base_url('kategori/tambah') ?>" class="btn btn-outline-primary">
                                        <i class="fas fa-plus"></i> Kategori Baru
                                    </a>
                                </div>
                            </div>
                            <!-- end result info -->

                            <!-- Table -->
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr class="text-center">
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA KATEGORI</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">1</th>
                                        <td class="align-middle">Buku Tulis</td>
                                        <td class="align-middle text-center">
                                            001
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">2</th>
                                        <td class="align-middle">Agenda</td>
                                        <td class="align-middle text-center">
                                            002
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">3</th>
                                        <td class="align-middle">Buku Nota & Kwitansi</td>
                                        <td class="align-middle text-center">
                                            003
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">4</th>
                                        <td class="align-middle">Buku Telp</td>
                                        <td class="align-middle text-center">
                                            004
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">5</th>
                                        <td class="align-middle">Buku Kas</td>
                                        <td class="align-middle text-center">
                                            005
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">6</th>
                                        <td class="align-middle">Block Note</td>
                                        <td class="align-middle text-center">
                                            006
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">7</th>
                                        <td class="align-middle">Hard Cover</td>
                                        <td class="align-middle text-center">
                                            007
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">8</th>
                                        <td class="align-middle">Box File</td>
                                        <td class="align-middle text-center">
                                            008
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">9</th>
                                        <td class="align-middle">Clear Sleaves and Pocket</td>
                                        <td class="align-middle text-center">
                                            009
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">10</th>
                                        <td class="align-middle">Continuos Form</td>
                                        <td class="align-middle text-center">
                                            010
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('kategori/sunting') ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
                                            <span class="page-link">Previous</span>
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
                                            <a class="page-link" href="#">Next</a>
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
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>