<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-left my-auto">
        <h1 class="mb-1">Gangguan</h1>
        <h1 class="mb-1">Kesehatan Mental</h1>
        <h3 class="mb-5">
            <em>Apakah anda memiliki keluhan?</em>
        </h3>
        <a class="btn btn-primary btn-xl" href="isidata">Diagnosis Sekarang</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h2 class="mb-5">Tahap Diagnosis Gangguan Kesehatan Mental</h2>
            <br></br>
        </div>
        <div class="row">
            <div class="col-lg col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="fas fa-user-edit"></i>
                </span>
                <h4>
                    <strong>1. Mengisi Data Pribadi</strong>
                </h4>
            </div>
            <div class="col-lg col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <!-- <i class="icon-pencil"></i> -->
                    <i class="fas fa-list-ol"></i>
                </span>
                <h4>
                    <strong>2. Memilih Gejala</strong>
                </h4>
            </div>
            <div class="col-lg col-md-6 mb-5 mb-md-0">
                <span class="service-icon rounded-circle mx-auto mb-3">
                    <i class="icon-like"></i>
                </span>
                <h4>
                    <strong>3. Hasil Diagnosis</strong>
                </h4>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>