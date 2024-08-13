<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
        body {
            background-image: url('<?php echo base_url('images/gbrbackground.png'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header" style="color: #AA4768">Payment Details</div>
                <div class="card-body">
                    <h5 class="card-title" style="color: #AA4768">Total Paket Booking Selvy Salon</h5>
                    <p class="card-text">
                    <?= $nama_paket ?><br>
                    </p>
                    <h5 style="color: #AA4768">Harga Total</h5>
                    <p>
                    <?= $harga_paket ?>
                    </p>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="paymentMethod" style="color: #AA4768">Payment Method</label>
                            <select class="form-control" id="paymentMethod" name="paymentMethod">
                                <option value="transfer">Transfer Bank</option>
                                <option value="dana">Dana</option>
                                <option value="qris">QRIS</option>
                            </select>
                        </div>
                        <a href="<?= site_url('successpayment') ?>" class="btn btn-pink" onclick="return checkReservation();">Bayar Sekarang</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Tambahkan skrip JavaScript -->
<script>
    // Cek apakah session masih kosong saat tombol "Bayar Sekarang" diklik
    function checkReservation() {
        // Periksa apakah session nama_paket dan harga_paket sudah ada
        <?php if (!session()->has('nama_paket') || !session()->has('harga_paket')) : ?>
            // Jika session kosong, tampilkan popup
            alert('Silahkan reservasi terlebih dahulu :)');
            return false; // Batalkan aksi dari tombol
        <?php endif; ?>
    }
</script>

</body>
</html>
