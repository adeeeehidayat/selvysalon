<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeLeft {
            from {
                opacity: 0;
                transform: translateX(-1000px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .fade-left {
            opacity: 0; /* Mulai dengan opasitas 0 */
            animation: fadeLeft 1s ease-in-out forwards; /* Terapkan animasi */
        }
        .fade-up {
            opacity: 0; /* Mulai dengan opasitas 0 */
            animation: fadeUp 1s ease-in-out forwards; /* Terapkan animasi */
        }
        .fade-down {
            opacity: 0; /* Mulai dengan opasitas 0 */
            animation: fadeDown 1s ease-in-out forwards; /* Terapkan animasi */
        }
        /* Tambahkan delay pada animasi */
        .fade-up-delay-1 {
            animation-delay: 0.5s;
        }
        .fade-up-delay-2 {
            animation-delay: 0.6s;
        }
        .fade-up-delay-3 {
            animation-delay: 0.7s;
        }
        .fade-up-delay-4 {
            animation-delay: 0.8s;
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
        .content-container {
            background-color: #f6e6d9;
            border-radius: 10px;
            width: 100%;
        }
        .content-container2 {
            width: 100%;
        }
        .change-yourself {
            font-style: italic;
        }
        .btn-book-now {
            background-color: #FC929E;
            border-color: #FC929E;
        }
        .btn-book-now:hover {
            background-color: #fff;
            border-color: #FC929E;
            color: #AA4768 !important;
        }
        .card {
            transition: transform 0.3s, background-color 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            background-color: #FFDFE0;
        }
        .service-card {
            text-align: center;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(245, 180, 189, 1);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .service-card img {
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .service-card p {
            font-weight: bold;
            margin-top: 10px;
        }

        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(245, 180, 189, 0.1);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }
        .service-card:hover img {
            transform: scale(1.1);
        }
        .service-card:hover::before {
            opacity: 1;
        }
        .team-card {
            padding: 7px;
            border-radius: 0px;
            text-align: center;
            background-color: #F5B4BD;
            margin-top: 20px;
            margin-left: -30px;
            border: 2px solid #F5B4BD;
            transition: background-color 0.2s ease-in-out, border 0.2s ease-in-out; 
        }
        .team-card:hover {
            background-color: #fff; 
            border: 2px solid #F5B4BD;
        }
        .team-card-selvy {
            padding: 7px;
            border-radius: 0px;
            text-align: center;
            background-color: #FC929E;
            margin-top: 20px;
            margin-left: -30px;
            border: 2px solid #FC929E;
            color: #fff;
            transition: background-color 0.2s ease-in-out, border 0.2s ease-in-out; 
        }
        .team-card-selvy:hover {
            color: black;
            background-color: #fff; 
            border: 2px solid #FC929E;
        }
        .team-card img {
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out; 
        }
        .team-card:hover img {
            transform: scale(0.9); 
        } 
        .team-card-selvy img {
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out; 
        }
        .team-card-selvy:hover img {
            transform: scale(0.9); 
        }
        .team-container {  
            display: flex;
            justify-content: center;
            margin-top: 50px; 
            margin-bottom: 70px;
        }
        .team-row {  
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;
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
    </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container-fluid content-container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
        <div class="col-md-6">
        <h2 class="change-yourself fade-up " style="margin-top:10%; margin-left: 10%; color: #AA4768; padding: 5px;">Change Yourself</h2>
        <h1 style="margin-left: 10%; color: #AA4768;" class="fade-up fade-up-delay-2">In Our Hand,</h1>
        <h1 style="margin-left: 10%; color: #AA4768;" class="fade-up fade-up-delay-3">Your Hair Comes Alive</h1>
        <a href="<?= site_url('reservasi') ?>" class="btn btn-primary btn-book-now fade-up fade-up-delay-4" style="margin-left: 10%; margin-top: 20px">Book Now</a>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url('images/gambar.png'); ?>" class="img-fluid" alt="Gambar 1">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid content-container2">
    <div class="row">
        <div class="col-md-6 fade-up fade-up-delay-4">
            <img src="<?php echo base_url('images/gambar2.png'); ?>" class="img-fluid" alt="Gambar Kiri" style="transform: rotate(-90deg); margin-top: -105px; margin-left: -30px;">
        </div>
        <div class="col-md-6 fade-up fade-up-delay-2">
            <h2 style="margin-top: 120px">Tentang Kami</h2>
            <p>Selvy Salon Adalah Sebuah Tempat Untuk Merawat Rambut Dengan Mementingkan Kenyamanan Pelanggan. Keunggulan Dari Salon Kami Adalah Bisa Merequest Produk Perawatan Rambut Yang Di Pakai Agar Bisa Sesuai Dengan Kondisi Rambut Yang Di Alami.</p>
        </div>
    </div>
</div>

<img src="<?= base_url('images/diskon.png')?>" style="width: 100%">

<h2 style="font-weight: bold; color: #AA4768; text-align: center; margin-bottom: 50px; margin-top: 50px">Layanan Kami</h2>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="service-card">
                <img src="<?php echo base_url('images/potong.png'); ?>" class="img-fluid" alt="Potong Rambut">
                <p style="font-weight: bold">Potong</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-card">
                <img src="<?php echo base_url('images/catok.png'); ?>" class="img-fluid" alt="Catok/Blow">
                <p style="font-weight: bold">Catok/Blow</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-card">
                <img src="<?php echo base_url('images/smoothing.png'); ?>" class="img-fluid" alt="Smoothing">
                <p style="font-weight: bold">Smoothing</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-card">
                <img src="<?php echo base_url('images/colouring.png'); ?>" class="img-fluid" alt="Colouring">
                <p style="font-weight: bold">Colouring</p>
            </div>
        </div>
    </div>
</div>

<h2 style="font-weight: bold; color: #AA4768; text-align: center; margin-top: 50px">TEAM</h2>

<div class="container team-container">
    <div class="team-row">
        <div class="col-md-1" style="margin-top: 100px">
            <div class="team-card">
                <img src="<?php echo base_url('images/yeri.png'); ?>" class="img-fluid" alt="Yeri">
                <h5 style="margin-top: 5px; margin-bottom: 5px">Yeri</h5>
            </div>
        </div>
        <div class="col-md-2" style="margin-top: 50px">
            <div class="team-card">
                <img src="<?php echo base_url('images/irene.png'); ?>" class="img-fluid" alt="Irene">
                <h3 style="margin-top: 10px; margin-bottom: 10px">Irene</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="team-card-selvy">
                <img src="<?php echo base_url('images/selvy.png'); ?>" class="img-fluid" alt="Selvy">
                <h1 style="margin-top: 20px; margin-bottom: 20px">Selvy</h1>
            </div>
        </div>
        <div class="col-md-2" style="margin-top: 50px">
            <div class="team-card">
                <img src="<?php echo base_url('images/seulgi.png'); ?>" class="img-fluid" alt="Seulgi">
                <h3 style="margin-top: 10px; margin-bottom: 10px">Seulgi</h3>
            </div>
        </div>
        <div class="col-md-1" style="margin-top: 100px">
            <div class="team-card">
                <img src="<?php echo base_url('images/wendy.png'); ?>" class="img-fluid" alt="Wendy">
                <h5 style="margin-top: 5px; margin-bottom: 5px">Wendy</h5>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
