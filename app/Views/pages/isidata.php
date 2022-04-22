<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <div class="content-section-heading">
            <h2 class="mb-5">Masukan Data Anda</h2>
        </div>
        <form action="diagnosis" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-lg text-center" name="tnama" placeholder="Masukan Nama Anda.." required>
            </div>
            <button class="mt-5 btn btn-primary btn-lg btn-block" type="submit" name="submit">Pilih Gejala</button>
        </form>
    </div>
    <div class="overlay"></div>
</header>

<?= $this->endSection(); ?>