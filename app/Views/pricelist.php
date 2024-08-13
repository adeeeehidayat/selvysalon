<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricelist</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #FC929E;
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
            background-image: url('<?php echo base_url('images/gbrbgpricelist.png'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            transition: transform 0.3s, background-color 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
            background-color: #FFDFE0;
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transition: transform 0.3s;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-title {
            color: #AA4768;
            margin-top: 20px;
            font-weight: 600;
        }

        .card-text {
            color: #333;
        }

        h2 {
            color: #AA4768;
            font-weight: 700;
            margin-top: 50px;
            margin-bottom: 30px;
        }

    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container">
    <h2 class="mt-5 mb-3 text-center" style="color: #AA4768">Price List</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Catok/Blow</h5>
                    <p class="card-text">Rp. 25.000.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Potong</h5>
                    <p class="card-text">Rp. 40.000.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Smoothing</h5>
                    <p class="card-text">Start from Rp. 200.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Coloring</h5>
                    <p class="card-text">Start from Rp. 150.000</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="mt-5 mb-3 text-center" style="color: #AA4768">Paket</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/potongcatok.png'); ?>" class="card-img-top" alt="Package Image">
                <div class="card-body" >
                    <h5 class="card-title">Potong + Catok</h5>
                    <p class="card-text">Rp. 60.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/potongblow.png'); ?>" class="card-img-top" alt="Package Image">
                <div class="card-body">
                    <h5 class="card-title">Nama Paket</h5>
                    <p class="card-text">Rp. 60.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/potongcolouring.png'); ?>" class="card-img-top" alt="Package Image">
                <div class="card-body">
                    <h5 class="card-title">Potong + Colouring</h5>
                    <p class="card-text">Rp. 350.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/potongsmoothing.png'); ?>" class="card-img-top" alt="Package Image">
                <div class="card-body"> 
                    <h5 class="card-title">Potong + Smoothing</h5>
                    <p class="card-text">Rp. 300.000</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
