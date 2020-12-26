<nav class="navbar" id="navbar">
    <button class="btn btn-outline-primary" id="toggle" value="close" onclick="toggle()">
        <i class="fas fa-bars"></i>
    </button>
    <span class="user-menu">
        Admin
        <img src="<?= base_url('img/Default/User1.jpg') ?>" alt="">
        <ul class="dropdown-content">
            <li>
                <a href="">
                    <i class="fas fa-tools"></i> Profile
                </a>
            </li>
            <li>
                <a href="<?= base_url('auth') ?>" class="logout-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </span>
</nav>