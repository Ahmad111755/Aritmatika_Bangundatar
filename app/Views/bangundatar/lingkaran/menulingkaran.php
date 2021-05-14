<?= $this->extend('layout/template_bangun_datar'); ?>
<?= $this->section('content_bangun_datar'); ?>
<div class="row mb-3 text-center">
    <div class="col">
        <div class="col-sm mb-5">
            <a href="<?= base_url('bangundatar/persegipanjang'); ?>" type="button" class="btn btn-warning"><i class="bi bi-arrow-left-square"></i> Previous</a>
            <a href="<?= base_url('bangundatar/trapesium'); ?>" type="button" class="btn btn-warning">Next <i class="bi bi-arrow-right-square"></i></a>
        </div>
        <h2>Perhitungan Lingkaran</h2>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="d-grid gap-2 col-9 mx-auto">
            <a href="#" class="btn btn-primary btn-lg" type="button">Luas</a>
            <a href="#" class="btn btn-info btn-lg" type="button">Keliling</a>
            <a href="#" class="btn btn-secondary btn-lg" type="button">Diameter</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>