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
                                        <th scope="col" colspan="2">USERNAME</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $a) : ?>
                                        <tr>
                                            <th scope="row" class="align-middle text-center"><?= ++$start ?></th>
                                            <td class="align-middle">
                                            <div class="thumbnail"><img src="<?= base_url('img/akun/'. $a->foto_user) ?>" alt="" class="img-fluid img show"></div></td>
                                            <td class="align-middle text-left">
                                                <?= $a->nama_user ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <button class="btn btn-secondary" data-toggle="modal" data-target="#sunting" data-whatever="<?= $a->id_user ?>" data-nama="<?= $a->nama_user ?>"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#hapus" data-whatever="<?= $a->id_user ?>"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- end Table -->

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <?= $this->pagination->create_links(); ?>
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
