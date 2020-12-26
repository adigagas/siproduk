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
                    <h4>Invoice</h4>
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
                                        <b>Detail Invoice</b>
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">
                                        Pembayaran
                                    </h5>
                                </div>
                            </div>
                                <table class="table">
                                    <tr>
                                        <th>
                                            Total Harga 
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
                                            <h5><b>Total Bayar</b></h5>
                                        </th>
                                        <th class="text-right">
                                            <h5><b>Rp 540.000</b></h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <h5><b>Produk yang dibeli</b></h5>
                                        </th>
                                        <th class="text-right">
                                            <h5><b>SSD SATA III 265GB Patriot</b></h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <h5>Nama Toko</h5>
                                        </th>
                                        <th class="text-right">
                                            <h5>Toko Komputer Araya Computer</h5>
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
    <!-- end Content -->

    <!-- Script -->
    <?php $this->load->view("template/js.php") ?>

</body>
</html>