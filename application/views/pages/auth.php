<!-- header -->
<?php $this->load->view('template/header_auth.php') ?>
<!-- end header -->

<body>
    <div class="container-fluid auth-bg d-flex flex-row justify-content-center">

        <div class="card auth-card align-self-center">
            <div class="card">
                <div class="card-header auth-card-header text-center">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="card-body">
                    <h5>Silahkan login</h5>
                    <form class="text-right" action="<?= base_url('dashboard') ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
</html>