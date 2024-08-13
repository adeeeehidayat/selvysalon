<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
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
        .fade-up-delay-5 {
            animation-delay: 0.9s;
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
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-bottom: 70px;
        }

        .team-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .team-card, .team-card-selvy {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #F5B4BD;
            border: 2px solid #F5B4BD;
            transition: background-color 0.3s ease-in-out, border 0.3s ease-in-out, transform 0.3s ease-in-out;
            width: 200px;
            margin: 10px;
            position: relative;
            overflow: hidden;
        }

        .team-card-selvy {
            background-color: #FC929E;
            border: 2px solid #FC929E;
            color: #fff;
        }

        .team-card img, .team-card-selvy img {
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .team-card:hover, .team-card-selvy:hover {
            background-color: #fff;
            border: 2px solid #F5B4BD;
            transform: translateY(-10px);
        }

        .team-card-selvy:hover {
            border: 2px solid #FC929E;
        }

        .team-card:hover img, .team-card-selvy:hover img {
            transform: scale(1.1);
        }

        .team-card h1, .team-card-selvy h1 {
            margin-top: 5px;
            margin-bottom: 5px;
            transition: color 0.3s ease-in-out;
        }

        .team-card:hover h1, .team-card-selvy:hover h1 {
            color: #AA4768;
        }

        .bio {
            opacity: 0;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            color: #000;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            transform: translateY(10px);
        }

        .team-card:hover .bio, .team-card-selvy:hover .bio {
            opacity: 1;
            transform: translateY(0);
        }
        .btn-pink {
            background-color: #AA4768;
            border-color: #AA4768;
            color: #fff;
        }
        .btn-pink:hover {
            background-color: #fff;
            border-color: #AA4768;
            color: #AA4768;
        }

    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<h1 class="text-center" style="color: #AA4768; margin-top: 50px; font-weight: bold;">TEAM</h1>
<div class="container team-container">
    <div class="team-row">
        <div class="team-card fade-up fade-up-delay-1">
            <img src="<?php echo base_url('images/yeri.png'); ?>" class="img-fluid" alt="Yeri">
            <h1 style="margin-top: 5px; margin-bottom: 5px">Yeri</h1>
            <div class="bio">
                <p>Yeri adalah stylist yang berbakat dengan keahlian dalam potongan rambut modern dan pewarnaan kreatif.</p>
            </div>
        </div>
        <div class="team-card fade-up fade-up-delay-2">
            <img src="<?php echo base_url('images/irene.png'); ?>" class="img-fluid" alt="Irene">
            <h1 style="margin-top: 10px; margin-bottom: 10px">Irene</h1>
            <div class="bio">
                <p>Irene adalah ahli perawatan kulit yang memastikan kulit pelanggan selalu sehat dan bersinar.</p>
            </div>
        </div>
        <div class="team-card-selvy fade-up fade-up-delay-3">
            <img src="<?php echo base_url('images/selvy.png'); ?>" class="img-fluid" alt="Selvy">
            <h1 style="margin-top: 20px; margin-bottom: 20px">Selvy</h1>
            <div class="bio">
                <p>Selvy, pemimpin tim kami, memiliki visi strategis dan keahlian dalam berbagai perawatan salon.</p>
            </div>
        </div>
        <div class="team-card fade-up fade-up-delay-4">
            <img src="<?php echo base_url('images/seulgi.png'); ?>" class="img-fluid" alt="Seulgi">
            <h1 style="margin-top: 10px; margin-bottom: 10px">Seulgi</h1>
            <div class="bio">
                <p>Seulgi adalah ahli perawatan kuku yang menciptakan desain kuku yang menakjubkan dan inovatif.</p>
            </div>
        </div>
        <div class="team-card fade-up fade-up-delay-5">
            <img src="<?php echo base_url('images/wendy.png'); ?>" class="img-fluid" alt="Wendy">
            <h1 style="margin-top: 5px; margin-bottom: 5px">Wendy</h1>
            <div class="bio">
                <p>Wendy, ahli rias wajah kami, memastikan setiap pelanggan tampil mempesona dengan sentuhan profesionalnya.</p>
            </div>
        </div>
        <div class="fade-up fade-up-delay-5">
            <a href="reservasi" style=" text-decoration: none"><button class="btn btn-pink btn-block" style="margin-top: 20px;">Reservasi Sekarang</button></a>
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
