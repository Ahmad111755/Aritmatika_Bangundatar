<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Jumbotron -->
<section class="jumbotron text-center">
    <img src="<?= base_url('img/logo.jpg'); ?>" alt="Kurt Ahmad" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4 fw-bold">Kelompok 6</h1>
    <!-- tulisan judul ada di GSAP -->
    <p class="lead"></p>
    <!-- Gelombang -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,32L0,64L130.9,64L130.9,288L261.8,288L261.8,128L392.7,128L392.7,64L523.6,64L523.6,256L654.5,256L654.5,32L785.5,32L785.5,128L916.4,128L916.4,0L1047.3,0L1047.3,320L1178.2,320L1178.2,96L1309.1,96L1309.1,256L1440,256L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z">
        </path>
    </svg>
    <!-- Akhir Gelombang -->
</section>
<!-- Akhir Jumbotron -->

<!-- Aritmatika -->
<section id="aritmatika">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Aritmatika</h2>
            </div>
        </div>
        <div class="row justify-content-around fs-5 text-center">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-grid gap-2">
                    <a href="<?= base_url('aritmatika/penjumlahan'); ?>" class="btn btn-primary btn-lg" type="button">Penjumlahan</a>
                    <a href="<?= base_url('aritmatika/pengurangan'); ?>" class="btn btn-info btn-lg" type="button">Pengurangan</a>
                    <a href="<?= base_url('aritmatika/perkalian'); ?>" class="btn btn-secondary btn-lg" type="button">Perkalian</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
                <div class="d-grid gap-2">
                    <a href="<?= base_url('aritmatika/pembagian'); ?>" class="btn btn-primary btn-lg" type="button">Pembagian</a>
                    <a href="<?= base_url('aritmatika/modulus'); ?>" class="btn btn-info btn-lg" type="button">Modulus</a>
                    <a href="<?= base_url('aritmatika/perpangkatan'); ?>" class="btn btn-secondary btn-lg" type="button">Perpangkatan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gelombang -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2edff" fill-opacity="1" d="M0,128L0,224L144,224L144,32L288,32L288,128L432,128L432,64L576,64L576,128L720,128L720,288L864,288L864,32L1008,32L1008,192L1152,192L1152,32L1296,32L1296,128L1440,128L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
        </path>
    </svg>
    <!-- Akhir Gelombang -->
</section>
<!-- Akhir Aritmatika -->

<!-- Bangun Datar -->
<section id="bangundatar">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Bangun Datar</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500">
                <div class="card">
                    <a href="<?= base_url('bangundatar/segitiga'); ?>">
                        <img src="<?= base_url('img/bangun/segitiga.jpg'); ?>" class="card-img-top" alt="Segitiga" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Segitiga</h5>
                        <label class="fs-5 pe-2">Detail</label>
                        <a href="<?= base_url('bangundatar/segitiga'); ?>">
                            <i class="bi bi-box-arrow-in-up-right text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
                <div class="card">
                    <a href="<?= base_url('bangundatar/persegi'); ?>">
                        <img src="<?= base_url('img/bangun/persegi.jpg'); ?>" class="card-img-top" alt="Persegi" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Persegi</h5>
                        <label class="fs-5 pe-2">Detail</label>
                        <a href="<?= base_url('bangundatar/segitiga'); ?>">
                            <i class="bi bi-box-arrow-in-up-right text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                <div class="card">
                    <a href="<?= base_url('bangundatar/persegipanjang'); ?>">
                        <img src="<?= base_url('img/bangun/persegipanjang.jpg'); ?>" class="card-img-top" alt="Persegi Panjang" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Persegi Panjang</h5>
                        <label class="fs-5 pe-2">Detail</label>
                        <a href="<?= base_url('bangundatar/segitiga'); ?>">
                            <i class="bi bi-box-arrow-in-up-right text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="300">
                <div class="card">
                    <a href="<?= base_url('bangundatar/lingkaran'); ?>">
                        <img src="<?= base_url('img/bangun/lingkaran.jpg'); ?>" class="card-img-top" alt="Lingkaran" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Lingkaran</h5>
                        <label class="fs-5 pe-2">Detail</label>
                        <a href="<?= base_url('bangundatar/segitiga'); ?>">
                            <i class="bi bi-box-arrow-in-up-right text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
                <div class="card">
                    <a href="<?= base_url('bangundatar/trapesium'); ?>">
                        <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Trapesium" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Trapesium</h5>
                        <label class="fs-5 pe-2">Detail</label>
                        <a href="<?= base_url('bangundatar/segitiga'); ?>">
                            <i class="bi bi-box-arrow-in-up-right text-primary fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gelombang -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,128L0,64L144,64L144,32L288,32L288,160L432,160L432,224L576,224L576,64L720,64L720,0L864,0L864,256L1008,256L1008,32L1152,32L1152,320L1296,320L1296,64L1440,64L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
        </path>
    </svg>
    <!-- Akhir Gelombang -->
</section>
<!-- Akhir Bangun Datar -->

<!-- Anggota -->
<section id="anggota">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Anggota Kelompok</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3 anggota">
                <div class="card">
                    <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Alfonso" />
                    <div class="card-body">
                        <h5 class="card-title">Alfonso</h5>
                        <i class="bi bi-instagram text-danger fs-1"></i>
                        <i class="bi bi-twitter text-primary fs-1 ps-2"></i>
                        <i class="bi bi-facebook text-primary fs-1 ps-2"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 anggota">
                <div class="card">
                    <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Daffa" />
                    <div class="card-body">
                        <h5 class="card-title">Daffa</h5>
                        <i class="bi bi-instagram text-danger fs-1"></i>
                        <i class="bi bi-twitter text-primary fs-1 ps-2"></i>
                        <i class="bi bi-facebook text-primary fs-1 ps-2"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 anggota">
                <div class="card">
                    <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Apri" />
                    <div class="card-body">
                        <h5 class="card-title">Apri</h5>
                        <i class="bi bi-instagram text-danger fs-1"></i>
                        <i class="bi bi-twitter text-primary fs-1 ps-2"></i>
                        <i class="bi bi-facebook text-primary fs-1 ps-2"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 anggota">
                <div class="card">
                    <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Ranaldi" />
                    <div class="card-body">
                        <h5 class="card-title">Renaldi</h5>
                        <i class="bi bi-instagram text-danger fs-1"></i>
                        <i class="bi bi-twitter text-primary fs-1 ps-2"></i>
                        <i class="bi bi-facebook text-primary fs-1 ps-2"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 anggota">
                <div class="card">
                    <img src="<?= base_url('img/bangun/keyboard.jpg'); ?>" class="card-img-top" alt="Ahmad Kurtubi" />
                    <div class="card-body">
                        <h5 class="card-title">Ahmad Kurtubi</h5>
                        <i class="bi bi-instagram text-danger fs-1"></i>
                        <i class="bi bi-twitter text-primary fs-1 ps-2"></i>
                        <i class="bi bi-facebook text-primary fs-1 ps-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gelombang footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,128L0,224L144,224L144,0L288,0L288,224L432,224L432,256L576,256L576,288L720,288L720,160L864,160L864,224L1008,224L1008,256L1152,256L1152,64L1296,64L1296,224L1440,224L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z">
        </path>
    </svg>
    <!-- akhir gelombang footer -->
</section>
<!-- Akhir Anggota -->
<?= $this->endSection(); ?>