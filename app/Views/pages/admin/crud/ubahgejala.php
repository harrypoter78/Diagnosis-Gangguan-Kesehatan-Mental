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
            <form class="user" action="/admin/updategejala/<?= $datagejala['id_gejala']; ?>" method="POST">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tkode" name="tkode" value="<?= $datagejala['kode_gejala']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Gejala</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tnama" name="tnama" value="<?= $datagejala['nama_gejala']; ?>">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-user btn-block">Ubah</button>
                    <a href="/admin/datagejala" class="btn btn-warning btn-user btn-block">Kembali</a>
                </div>
        </div>
    </div>



</div>
<!-- End of Main Content -->


<?= $this->endSection(); ?>