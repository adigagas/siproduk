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
                <form action="<?= base_url('pembeli') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pembeli</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_pembeli">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" maxlength="64">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No telp." maxlength="13">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" maxlength="32">
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" maxlength="32">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode POS</label>
                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode POS" maxlength="5">
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3"></textarea>
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
                <form action="<?= base_url('pembeli') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sunting Data Pembeli</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id_pembeli" id="sunting_pembeli">
                            <label for="nama_pembeli">Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" placeholder="Nama Pembeli" maxlength="64">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No telp." maxlength="13">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" maxlength="32">
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" maxlength="32">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode POS</label>
                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode POS" maxlength="5">
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="3"></textarea>
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
                    <h5 class="modal-title"><i class="fas fa-times-circle"></i><b> Hapus Data Pembeli</b></h5>
                </div>
                <div class="modal-body text-left">
                    <p>Apakah anda yakin ingin menghapus?</p>
                </div>
                <div class="modal-footer">
                    <form action="<?= base_url('pembeli') ?>" method="post">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="hidden" class="form-control" name="id_pembeli" id="hapus_pembeli" placeholder="Nama Kategori">
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
                    <h4>Pembeli</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Search -->
                            <form action="<?= base_url('pembeli') ?>" method="post">
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
                                        Menampilkan
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
                            <table class="table table-sm">
                                <thead class="bg-primary text-light">
                                    <tr class=" text-center">
                                        <th scope="col"  width="5%">NO</th>
                                        <th scope="col">NAMA PEMBELI</th>
                                        <th scope="col"  width="200px">ID</th>
                                        <th scope="col">NO TELP</th>
                                        <th scope="col">PROVINSI</th>
                                        <th scope="col">KOTA</th>
                                        <th scope="col" >KODE POS</th>
                                        <th scope="col" width="20%">ALAMAT</th>
                                        <th scope="col"  width="150px">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pembeli as $pb) : ?>
                                    <tr class="text-center">
                                        <th scope="row" class="align-middle text-center"><?= ++$start ?></th>
                                        <td class="align-middle text-left">
                                            <?= $pb->nama_pembeli ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->id_pembeli ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->no_telp ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->provinsi ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->kota ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->kode_pos ?>
                                        </td>
                                        <td class="align-middle">
                                            <?= $pb->alamat_lengkap ?>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#sunting" data-id="<?= $pb->id_pembeli ?>" data-nama="<?= $pb->nama_pembeli ?>" data-telp="<?= $pb->no_telp ?>" data-provinsi="<?= $pb->provinsi ?>" data-kota="<?= $pb->kota ?>" data-pos="<?= $pb->kode_pos ?>" data-alamat="<?= $pb->alamat_lengkap ?>"><i class="fas fa-edit"></i></button>

                                            <button class="btn btn-danger" data-toggle="modal" data-target="#hapus" data-id="<?= $pb->id_pembeli ?>"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
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
            var data_sunting = button.data('id') // Extract info from data-* attributes
            var data_nama = button.data('nama') // Extract info from data-* attributes
            var data_telp = button.data('telp') // Extract info from data-* attributes
            var data_provinsi = button.data('provinsi') // Extract info from data-* attributes
            var data_kota = button.data('kota') // Extract info from data-* attributes
            var data_pos = button.data('pos') // Extract info from data-* attributes
            var data_alamat = button.data('alamat') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Sunting Data Pembeli ' + data_sunting)
            modal.find('.modal-body .form-group input#sunting_pembeli').val(data_sunting)
            modal.find('.modal-body .form-group input#nama_pembeli').val(data_nama)
            modal.find('.modal-body .form-group input#no_telp').val(data_telp)
            modal.find('.modal-body .form-group input#provinsi').val(data_provinsi)
            modal.find('.modal-body .form-group input#kota').val(data_kota)
            modal.find('.modal-body .form-group input#kode_pos').val(data_pos)
            modal.find('.modal-body .form-group textarea#alamat_lengkap').val(data_alamat)
        })

        $('#hapus').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var data_hapus = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Hapus Data Pembeli ' + data_hapus)
            modal.find('.modal-footer form input#hapus_pembeli').val(data_hapus)
        })
    </script>

</body>
</html>