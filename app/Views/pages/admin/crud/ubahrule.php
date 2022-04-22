<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data</h1>
    </div>


    <!-- Ubah Data Card -->
    <div class="card shadow mb-4">
        <!-- Card Body -->
        <div class="card-body">
            <form class="user" action="/admin/updaterule/<?= $datarule['id_rule']; ?>" method="POST">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Rule</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="trule" name="trule" value="<?= $datarule['kode_rule']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Penyakit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tpenyakit" name="tpenyakit" value="<?= $datarule['kode_penyakit']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Gejala</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tgejala" name="tgejala" value="<?= $datarule['kode_gejala']; ?>">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
                    <a href="/admin/datarule" class="btn btn-warning btn-user btn-block">Kembali</a>
                </div>
        </div>
    </div>



</div>
<!-- End of Main Content -->


<?= $this->endSection(); ?>