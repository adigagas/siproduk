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

    <!-- delete modal -->
    <div class="modal fade" id="hapus" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title"><i class="fas fa-times-circle"></i><b> Hapus Akun</b></h5>
                </div>
                <div class="modal-body text-left">
                    <p>Apakah anda yakin menghapus akun?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger"  data-dismiss="modal">Ya, hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Content -->
    <div class="content" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md text-accent mb-3">
                    <h4>Akun</h4>
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
                                        <input type="text" class="form-control" placeholder="Cari akun..">
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
                                        Menampilkan <b>15</b> dari <b>50</b> hasil
                                    </span>
                                </div>
                                <div class="col-xl-3 col-lg-6 text-right">
                                    <a href="<?= base_url('akun/tambah') ?>" class="btn btn-outline-primary">
                                        <i class="fas fa-plus"></i> Akun Baru
                                    </a>
                                </div>
                            </div>
                            <!-- end result info -->

                            
                            <!-- Table -->
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr class="text-center">
                                        <th scope="col" width="64px">NO</th>
                                        <th scope="col" colspan="2">Username</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">1</th>
                                        <td class="align-middle" width="100px">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                        </td>
                                        <td class="align-middle">
                                            Monika Kusuma Dewi
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="<?= base_url('akun/sunting') ?>"  class="btn btn-secondary fas fa-edit" ></a> 
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">2</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Gagas Adi Rismawan
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">3</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Dwi Ayu Wulandari
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">4</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Yosef Yoga Himawan
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">5</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Rangga Bramasta
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">6</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Chintya Gabriella Panggabean
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">7</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Viorella Panggabean
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">8</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                            
                                        </td>
                                        <td class="align-middle">
                                            Palupi Dyah
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                            <div class="modal fade" id="hapus" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">9</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                        </td>
                                        <td class="align-middle">
                                            Dimas Pradana Setiawan
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="align-middle text-center">10</th>
                                        <td class="align-middle text-center">
                                            <div class="thumbnail"><img src="<?= base_url('img/Default/User1.jpg') ?>" alt="" class="img-fluid"></div>
                                        </td>
                                        <td class="align-middle">
                                            Lily Permatasari
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="" class="btn btn-secondary fas fa-edit" ></a>
                                            <a href="" class="btn btn-danger fas fa-trash-alt" data-toggle="modal" data-target="#hapus" ></a>
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
    </div>

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>
