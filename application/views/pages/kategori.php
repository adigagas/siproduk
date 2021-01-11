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
    
    <!-- Alert -->
    <?= $this->session->flashdata('message'); ?>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('kategori') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" maxlength="128">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <input type="submit" name="tambah" id="tambah" value="Tambah" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end Modal Tambah -->

    <!-- Modal Sunting -->
    <div class="modal fade" id="sunting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('kategori') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sunting Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id_kategori" id="sunting_kategori">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" maxlength="128">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <input type="submit" name="sunting" id="sunting" value="Sunting" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end Modal Sunting -->

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
                    <form action="<?= base_url('kategori') ?>" method="post">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="hidden" class="form-control" name="id_kategori" id="hapus_kategori" placeholder="Nama Kategori">
                        <input type="submit" name="hapus" id="hapus" value="Hapus" class="btn btn-danger">
                    </form>
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
                            <form action="<?= base_url('kategori') ?>" method="post">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-3">
                                        <h5 class="mt-2">Pencarian</h5>
                                    </div>
                                    <div class="col-md">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" value="<?= $keyword ?>" id="keyword" name="keyword" placeholder="Cari kategori..">
                                            <div class="input-group-append">
                                                <input class="btn btn-primary" type="submit" name="cari" id="cari" value="Cari">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end Search -->

                            <!-- result info -->
                            <div class="row my-4">
                                <div class="col-lg">
                                    <span class="result-note">
                                        Menampilkan hasil <b><?php if($total_rows<$per_page) {echo $total_rows; } else { echo $per_page; } ?></b> dari <b><?= $total_rows ?></b> 
                                    </span>
                                </div>
                                <div class="col-xl-3 col-lg-6 text-right">
                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#tambah">
                                        <i class="fas fa-plus"></i> Kategori Baru
                                    </button>
                                </div>
                            </div>
                            <!-- end result info -->

                            <!-- Table -->
                            <table class="table">
                                <thead class="bg-primary text-light">
                                    <tr class="text-center">
                                        <th scope="col" width="5%">NO</th>
                                        <th scope="col">NAMA KATEGORI</th>
                                        <th scope="col">ID</th>
                                        <th scope="col" width="150px">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as $k) : ?>
                                        <tr>
                                            <th scope="row" class="align-middle text-center"><?= ++$start ?></th>
                                            <td class="align-middle"><?= $k->nama_kategori ?></td>
                                            <td class="align-middle text-center">
                                                <?= $k->id_kategori ?>
                                            </td>
                                            <td class="align-middle text-center">
                                                <button class="btn btn-secondary" data-toggle="modal" data-target="#sunting" data-whatever="<?= $k->id_kategori ?>" data-nama="<?= $k->nama_kategori ?>"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#hapus" data-whatever="<?= $k->id_kategori ?>"><i class="fas fa-trash-alt"></i></button>
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
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

    <!-- js hapus -->
    <script>
        $('#sunting').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var data_sunting = button.data('whatever') // Extract info from data-* attributes
            var data_nama = button.data('nama') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Sunting kategori ' + data_sunting)
            modal.find('.modal-body .form-group input#sunting_kategori').val(data_sunting)
            modal.find('.modal-body .form-group input#nama_kategori').val(data_nama)
        })

        $('#hapus').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var data_hapus = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Hapus kategori ' + data_hapus)
            modal.find('.modal-footer form input#hapus_kategori').val(data_hapus)
        })
    </script>

</body>
</html>