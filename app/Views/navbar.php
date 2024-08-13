<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?php echo base_url('images/logoselvysalon.png'); ?>" alt="Salon Logo" style="width: 45px; height: 37px">
            Selvy Salon
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('reservasi') ?>">Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('payment') ?>">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('pricelist') ?>">Pricelist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('layanan') ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('team') ?>">Team</a>
                </li>
                <li style="display: inline-block;">
                    <div class="dropdown">
                        <a href="#" id="userDropdown" class="text-decoration-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user" style="color: #fff; font-size: 1.5rem; margin-top: 5px; margin-left: 30px"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <?php if (session()->get('logged_in')): ?>
                                <li><a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Profile</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo base_url('signup'); ?>">Sign Up</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
