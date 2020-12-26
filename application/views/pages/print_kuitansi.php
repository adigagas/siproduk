<!-- Header -->
<?php $this->load->view("template/header.php") ?>
<!-- end Header -->
<body>

    <!-- Certak Kuitansi -->
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <div class="title-np">
                                    <h5>
                                        <b>KUITANSIBUKTI PEMBAYARAN</b>
                                    </h5>
                                    <h6><b>CV. ARAYA MEDIA IT</b></h6>
                                    <h6>
                                        <small>
                                            Jalan Bantaran Indah Blok E21B Malang, Jawa Timur
                                        </small>
                                    </h6>
                                    <h6>
                                        <small>
                                            www.arayamedia.id | 0812xxxxxxxx |info@arayamedia.id
                                        </small>
                                    </h6>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>SUDAH TERIMA DARI</th>
                                        <td>:</td>
                                        <td>Monika Kusuma Dewi</td>
                                    </tr>
                                    <tr>
                                        <th>JUMLAH UANG</th>
                                        <td>:</td>
                                        <td>Rp. 4.540.000</td>
                                    </tr>
                                    <tr>
                                        <th class="align-top">TERBILANG</th>
                                        <td class="align-top">:</td>
                                        <td>
                                            <textarea name="" id="" cols="50" rows="2" class="form-control" placeholder="ex : Satu Juta Rupiah"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-top">PEMBAYARAN</th>
                                        <td class="align-top">:</td>
                                        <td>
                                            <textarea name="" id="" cols="50" rows="4" class="form-control" placeholder="ex : Pembelanjaan alat perlengkapan sekolah"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-xl-4">
                                Malang, 20 Novembar 2020
                                CV. Araya Media IT
                                <br>
                                <br>
                                <br>
                                <br>
                                Hendra
                                <hr class="divider">
                                Direktur Utama
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <button class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Cetak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Cetak Kuitansi -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>