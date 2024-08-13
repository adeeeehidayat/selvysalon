<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(100px);
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
            animation-delay: 0.2s;
        }
        .fade-up-delay-2 {
            animation-delay: 0.3s;
        }
        .fade-up-delay-3 {
            animation-delay: 0.4s;
        }
        .fade-up-delay-4 {
            animation-delay: 0.5s;
        }
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

        .card {
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card:hover {
            transform: scale(1.05);
            background-color: #FFDFE0;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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
            font-weight: 600;
            text-align: center;
            margin-top: 20px;
        }

        .card-body {
            text-align: center;
        }

        h2, h4 {
            color: #AA4768;
            font-weight: 700;
        }

        h2 {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        h4 {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .img-square {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container">
    <h2 class="mt-5 mb-3 text-center fade-up" style="color: #AA4768">Layanan Kami</h2>
    <h4 class="mt-5 mb-3 fade-up" style="color: #AA4768">Potong</h4>
    <div class="row justify-content-end">
        <div class="col-md-3 fade-up">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/hime.png'); ?>" class="card-img-top img-square" alt="Foto Paket 1">
                <div class="card-body">
                    <h5 class="card-title" style="color: #AA4768">Hime</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 fade-up fade-up-delay-1">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/wolfcuthairlong.png'); ?>" class="card-img-top img-square" alt="Foto Paket 2">
                <div class="card-body">
                    <h5 class="card-title" style="color: #AA4768">Wolfcut Hair Long</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 fade-up fade-up-delay-2">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/wolfcutshorthair.png'); ?>" class="card-img-top img-square" alt="Foto Paket 3">
                <div class="card-body">
                    <h5 class="card-title" style="color: #AA4768">Wolfcut Short Hair</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 fade-up fade-up-delay-3">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/bob.png'); ?>" class="card-img-top img-square" alt="Foto Paket 4">
                <div class="card-body">
                    <h5 class="card-title" style="color: #AA4768">Bob</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h4 class="mt-5 mb-3 fade-up" style="color: #AA4768">Blow</h4>
    <div class="row justify-content-end">
        <div class="col-md-3 fade-up fade-up-delay-1">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/blow1.png'); ?>" class="card-img-top img-square" alt="Foto Paket 1">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3 fade-up fade-up-delay-2">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/blow2.png'); ?>" class="card-img-top img-square" alt="Foto Paket 2">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3 fade-up fade-up-delay-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/blow3.png'); ?>" class="card-img-top img-square" alt="Foto Paket 3">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3 fade-up fade-up-delay-4" style="padding: 15px;">
                <img src="<?php echo base_url('images/blow4.png'); ?>" class="card-img-top img-square" alt="Foto Paket 4">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h4 class="mt-5 mb-3" style="color: #AA4768">Smooting & Colouring</h4>
    <div class="row justify-content-end">
        <div class="col-md-3">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/sc1.png'); ?>" class="card-img-top img-square" alt="Foto Paket 1">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/sc2.png'); ?>" class="card-img-top img-square" alt="Foto Paket 2">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/sc3.png'); ?>" class="card-img-top img-square" alt="Foto Paket 3">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="padding: 15px;">
                <img src="<?php echo base_url('images/sc4.png'); ?>" class="card-img-top img-square" alt="Foto Paket 4">
                <div class="card-body">
                </div>
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
