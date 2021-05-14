<?= $this->extend('layout/template_hitung'); ?>
<?= $this->section('content_hitung'); ?>
<form action="<?= base_url('/Aritmatika/hitungmodulus'); ?>" class="text-start">
    <div class="mb-3 row">
        <div class="col-sm-10 mb-5">
            <a href="<?= base_url('aritmatika/pembagian');?>" type="button" class="btn btn-warning"><i class="bi bi-arrow-left-square"></i> Previous</a>                
            <a href="<?= base_url('aritmatika/perpangkatan');?>" type="button" class="btn btn-warning">Next <i class="bi bi-arrow-right-square"></i></a>
        </div>
        <div class="col-sm-10">
            <h3>Modulus</h3>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert col-10">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input type="text" autocomplete="off" class="form-control form-control-lg <?= ($validation->hasError('bilangan1')) ? 'is-invalid':''; ?>" name="bilangan1" placeholder="Bilangan ke-1" autofocus value="<?= old('bilangan1'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('bilangan1'); ?>
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input type="text" autocomplete="off" class="form-control form-control-lg <?= ($validation->hasError('bilangan2')) ? 'is-invalid':''; ?>" name="bilangan2" placeholder="Bilangan ke-2" value="<?= old('bilangan2'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('bilangan2'); ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Hitung</button>
</form>

<?= $this->endSection(); ?>