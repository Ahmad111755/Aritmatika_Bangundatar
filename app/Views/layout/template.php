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
    <?= $this->include('layout/navbar'); ?>
    <!-- Akhir Navbar -->

    <!-- content -->
    <?= $this->renderSection('content'); ?>
    <!-- akhir content -->

    <!-- FOOTER -->
    <footer class="bg-primary text-white text-center pb-3">
        <p>Created by group 6 </p>
        <i class="bi bi-hand-thumbs-up fs-2 text-warning"></i><i class="bi bi-emoji-sunglasses text-warning fs-1"></i>
    </footer>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // myscript
        const anggota = document.querySelectorAll('.anggota');
        anggota.forEach((foto, i) => {
            foto.dataset.aos = 'fade-down';
            foto.dataset.aosDelay = i * 100;
            foto.dataset.aosDuration = 1000;
        })

        AOS.init();
    </script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
    <!-- Script tambahan GSAP -->
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {
            duration: 2,
            delay: 1.5,
            text: 'Pembelajaran Aritmatika dan Bangun Datar untuk anak TK dan SD'
        });
        gsap.from('.jumbotron img', {
            duration: 5,
            rotateY: 360,
            opacity: 0,
            ease: 'elastic'
        });

        // gsap.from('.navbar', {
        //     duration: 2,
        //     y: '-100%',
        //     opacity: 0,
        //     ease: 'elastic'
        // });
        gsap.from('.display-4', {
            duration: 1,
            x: -50,
            opacity: 0,
            delay: 0.5,
            ease: 'back'
        });
    </script>
    <!-- AKHIR FOOTER -->
</body>

</html>