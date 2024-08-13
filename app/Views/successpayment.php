<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #FC929E !important;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            font-weight: bold; 
            color: #AA4768 !important;
        }
        .footer {
            background-color: #FFDFE0;
            color: #000000;
            padding: 20px;
            width: 100%;
        }
        .copyright {
            background-color: #AA4768;
            color: #fff;
            padding: 10px;
            text-align: center;
            bottom: 0;
            width: 100%;
        }
        .btn-pink {
            background-color: #AA4768;
            border-color: #AA4768;
            color: #fff;
        }
        .btn-pink:hover {
            background-color: #fff;
            border-color: #AA4768;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="card-title" style="color: #AA4768; font-weight: bold">Payment Success</h2>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold"><?= session()->get('nama') ?></h5><br>
                    <img src="<?php echo base_url('images/scpaylogo.png'); ?>" style="width: 150px; height: 150px;" alt="Checkmark Image" class="img-fluid"><br><br>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold">
                    <?= $nama_paket ?><br>
                    </h5>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold">
                    <?= $harga_paket ?><br>
                    </h5>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold"><?= $jam_kedatangan ?></h5><br>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold">Thank You For Booking!</h5><br>
                    <h5 class="card-text" style="color: #AA4768; font-weight: bold">Silahkan Tunjukkan Bukti Ini Saat Berkunjung Ke Salon</h5><br>
                    <a href="<?= site_url('successpayment/continue') ?>" class="btn btn-pink">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
