<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            color: #AA4768;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .profile-pic {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container form-container">
    <h2 class="text-center" style="margin-bottom: 20px">Profile</h2>
    <img src="<?php echo base_url('uploads/' . $user['photo']); ?>" alt="Profile Picture" id="profile-pic-preview" class="profile-pic">
    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('profile/uploadPhoto'); ?>" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="file" name="photo" class="form-control mb-2" required>
        <button type="submit" class="btn btn-pink btn-block">Update Photo</button>
    </form>
    <form class="profile-form" action="<?php echo base_url('profile/update'); ?>" method="post" style="margin-top: 20px">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" value="<?= $user['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" value="<?= $user['email'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Ketik ulang kata sandi" required>
        </div>
        <button type="submit" class="btn btn-pink btn-block">Simpan Perubahan</button>
    </form>
    <a href="<?= base_url('profile/logout'); ?>" class="btn btn-danger btn-block" style="margin-top: 20px">Log Out</a>
    </form>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profile-pic-preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
</html>
