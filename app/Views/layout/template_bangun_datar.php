<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <title><?= $judul; ?></title>
</head>

<body>
    <!-- Navbar -->
    <?= $this->include('layout/navbar_bangun_datar'); ?>
    <!-- Akhir Navbar -->
    <!-- content -->
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <section>
                    <?= $this->renderSection('content_bangun_datar'); ?>
                </section>
            </div>
        </div>
    </div>
    <!-- akhir content -->

    <!-- FOOTER -->
    <footer class="bg-success text-light text-center pb-3 fixed-bottom">
        <p>Created by group 6 </p>
        <i class="bi bi-hand-thumbs-up fs-2"></i><i class="bi bi-emoji-sunglasses fs-1"></i>
    </footer>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- AKHIR FOOTER -->
</body>

</html>