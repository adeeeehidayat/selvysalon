<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
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
            background-image: url('<?php echo base_url('images/gbrbgreservasi.png'); ?>');
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

<div class="container fade-up">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 (margin-top) mb-5 (margin-bottom)">
            <div class="card" style="background-color: #F5B4BD;">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #AA4768; font-weight: bold;">Booking</h5>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo site_url('reservasi/simpan'); ?>" method="post">
                        <div class="form-group fade-up">
                            <label for="nama" style="color: #AA4768; font-weight: bold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group fade-up fade-up-delay-1">
                            <label for="no_hp" style="color: #AA4768; font-weight: bold">No. HP</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="form-group fade-up fade-up-delay-2">
                            <label for="alamat" style="color: #AA4768; font-weight: bold">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="form-group fade-up fade-up-delay-3">
                            <label for="jam_kedatangan" style="color: #AA4768; font-weight: bold">Jam Kedatangan</label>
                            <input type="datetime-local" class="form-control" id="jam_kedatangan" name="jam_kedatangan" required>
                        </div>
                        <div class="form-group fade-up fade-up-delay-4">
                        <label for="paket" style="color: #AA4768; font-weight: bold">Paket</label>
                            <select class="form-control" id="nama_paket" name="nama_paket" required>
                                <?php foreach ($paket as $item): ?>
                                    <option value="<?= $item['nama_paket'] ?>"><?= $item['nama_paket'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group fade-up fade-up-delay-4">
                            <label for="masalah_rambut" style="color: #AA4768; font-weight: bold">Masalah Rambut</label>
                            <textarea class="form-control" id="masalah_rambut" name="masalah_rambut" rows="3" required></textarea>
                        </div>
                        <div class="form-group fade-up fade-up-delay-4">
                            <label for="request_produk" style="color: #AA4768; font-weight: bold">Request Produk</label>
                            <select class="form-control" id="request_produk" name="request_produk">
                                <?php foreach ($produk as $item): ?>
                                    <option value="<?= $item['request_produk'] ?>"><?= $item['request_produk'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group fade-up fade-up-delay-4">
                            <label for="request_pegawai" style="color: #AA4768; font-weight: bold">Request Pegawai</label>
                            <select class="form-control" id="request_pegawai" name="request_pegawai">
                                <?php foreach ($pegawai as $item): ?>
                                    <option value="<?= $item['request_pegawai'] ?>"><?= $item['request_pegawai'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group fade-up fade-up-delay-4">
                            <div class="card" style="padding: 20px">Untuk melihat detail pegawai lebih lanjut, klik link berikut <a href="team" style="color: #AA4768">Detail Pegawai</a></div>
                        </div>
                        <button type="submit" class="btn btn-pink fade-up fade-up-delay-4">Next</button>
                    </form>
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
