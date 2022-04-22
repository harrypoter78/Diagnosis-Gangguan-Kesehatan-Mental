<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- <div class="page-holder bg-cover"> -->
<section class="content-section page-holder bg-cover" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-center  mt-10">
            <h2 class="mb-5">Hasil Diagnosis</h2>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white font-weight-bold">
                Gejala Dialami
            </div>
            <div class="card-body">
                <p><?= $varG1; ?></p>
                <p><?= $varG2; ?></p>
                <p><?= $varG3; ?></p>
                <p><?= $varG4; ?></p>
                <p><?= $varG5; ?></p>
                <p><?= $varG6; ?></p>
                <p><?= $varG7; ?></p>
                <p><?= $varG8; ?></p>
                <p><?= $varG9; ?></p>
                <p><?= $varG10; ?></p>
                <p><?= $varG11; ?></p>
                <p><?= $varG12; ?></p>
                <p><?= $varG13; ?></p>
                <p><?= $varG14; ?></p>
                <p><?= $varG15; ?></p>
                <p><?= $varG16; ?></p>
                <p><?= $varG17; ?></p>
                <p><?= $varG18; ?></p>
                <p><?= $varG19; ?></p>
                <p><?= $varG20; ?></p>
                <p><?= $varG21; ?></p>
                <p><?= $varG22; ?></p>
                <p><?= $varG23; ?></p>
                <p><?= $varG24; ?></p>
                <p><?= $varG25; ?></p>
                <p><?= $varG26; ?></p>
                <p><?= $varG27; ?></p>
                <p><?= $varG28; ?></p>
                <p><?= $varG29; ?></p>
                <p><?= $varG30; ?></p>
                <p><?= $varG31; ?></p>
                <p><?= $varG32; ?></p>
                <p><?= $varG33; ?></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white font-weight-bold">
                Jenis Gangguan Kesehatan
            </div>
            <div class="card-body">
                <h5><?= $varresult; ?></h5>
                <p><?= $vardeskripsi; ?></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white font-weight-bold">
                Solusi Obat-Obatan
            </div>
            <div class="card-body">
                <p><?= $varobat; ?></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white font-weight-bold">
                Solusi Lain
            </div>
            <div class="card-body">
                <p><?= $varlain; ?></p>
            </div>
        </div>

        <div class="row g-3 mt-5">
            <div class="col text-left">
                <a class="mt-3 btn btn-dark" href="isidata">
                    <i class="fas fa-chevron-circle-left"></i> Diagnosis Lagi</a>
            </div>
            <div class="col text-right">
                <a class="mt-3 btn btn-dark" href="/">
                    Halaman Utama <i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>


</section>
<!-- </div> -->
<?= $this->endSection(); ?>