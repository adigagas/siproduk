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
                <div class="col-md text-primary mb-3">
                    <h4>Tambah Produk</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form action="<?= base_url('produk/sunting') ?>" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-xl">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>Informasi Produk</b>
                                </h5>
                                <input type="hidden" id="id_produk" name="id_produk" value="<?= $produk->id_produk ?>">
                                <div class="form-group row">
                                    <label for="no_sku" class="col-xl-3">No SKU</label>
                                    <div class="col-xl">
                                        <input type="text" id="no_sku" name="no_sku" class="form-control"  value="<?= $produk->no_sku ?>" maxlength="128">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_produk" class="col-xl-3">Nama Produk</label>
                                    <div class="col-xl">
                                        <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="<?= $produk->nama_produk ?>" maxlength="128">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merek" class="col-xl-3">Merek</label>
                                    <div class="col-xl">
                                        <input type="text" id="merek" name="merek" class="form-control" value="<?= $produk->merek ?>" maxlength="32">
                                    </div>
                                </div>
                                    
                                <div class="form-group row">
                                    <label for="kondisi" class="col-xl-3">Kondisi</label>
                                    <div class="col-xl">
                                        <input type="text" id="kondisi" name="kondisi" class="form-control" value="<?= $produk->kondisi ?>" maxlength="32">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="garansi" class="col-xl-3">Garansi</label>
                                    <div class="col-xl">
                                        <input type="text" id="garansi" name="garansi" class="form-control" value="<?= $produk->garansi ?>" maxlength="32">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="garansi" class="col-xl-3">Kategori</label>
                                    <div class="col-xl">
                                        <select type="text" name="id_kategori" id="id_kategori" class="form-control selectpicker" data-live-search="true" placeholder="pilih kategori">
                                            <?php foreach ($kategori as $k) : ?>
                                                <option value="<?= $k->id_kategori ?>" <?php if($k->id_kategori == $produk->id_kategori) : ?> Selected <?php endif ?> >
                                                    <?= $k->nama_kategori ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-shadow mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Deskripsi
                                </b></h5>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-xl-3">Deskripsi</label>
                                    <div class="col-xl">
                                        <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?= $produk->deskripsi ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Dimensi Produk
                                </b></h5>
                                <div class="form-group row">
                                    <label for="panjang" class="col-xl-3">Panjang</label>
                                    <div class="col-xl">
                                        <input type="number" id="panjang" name="panjang" class="form-control" value="<?= $produk->panjang ?>" onKeyPress="if(this.value.length==11) return false;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lebar" class="col-xl-3">Lebar</label>
                                    <div class="col-xl">
                                        <input type="number" id="lebar" name="lebar" class="form-control" value="<?= $produk->lebar ?>" onKeyPress="if(this.value.length==11) return false;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi" class="col-xl-3">Tinggi</label>
                                    <div class="col-xl">
                                        <input type="number" id="tinggi" name="tinggi" class="form-control" value="<?= $produk->tinggi ?>" onKeyPress="if(this.value.length==11) return false;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat" class="col-xl-3">Berat</label>
                                    <div class="col-xl">
                                        <input type="number" id="berat" name="berat" class="form-control" value="<?= $produk->berat ?>" onKeyPress="if(this.value.length==11) return false;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-shadow mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                    Gambar
                                </b></h5>
                                                <input type="hidden" id="old_gambar" name="old_gambar" value="<?= $produk->gambar ?>">
                                <div class="form-group row">
                                    <div class="col-xl">
                                            
                                        <div class="file-img">
                                            <div class="img-preview">
                                                <img src="<?= base_url('img/produk/'.$produk->gambar) ?>" class="img-fluid" id="img_preview" alt="">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="preview(this)" accept="image/*">
                                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                            </div>  
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="form-group row mt-3">
                            <div class="col text-right">
                                <a href="<?= base_url('produk') ?>" class="btn btn-lg btn-outline-secondary mr-3"><i class="fas fa-arrow-left mr-3"></i>Kembali</a>
                                <input class="btn btn-lg btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>