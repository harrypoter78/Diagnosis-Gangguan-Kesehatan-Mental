<?= $this->extend('layout/admin/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penyakit</h1>
    </div>

    <!-- Pesan Pemberitahuan -->
    <?php if (session()->getFlashdata('pemberitahuan')) : ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= session()->getFlashdata('pemberitahuan'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <!-- Card Header -->
        <div class="card-header py-3">
            <a href="/admin/tambahpenyakit" class="btn btn-primary btn-icon-split btn-sm float-right">
                <span class="icon text-white">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Solusi Obat</th>
                            <th>Solusi Lain</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Solusi Obat</th>
                            <th>Solusi Lain</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($datapenyakit as $penyakit) : ?>
                            <tr>
                                <td><?= $penyakit['id_penyakit']; ?></td>
                                <td><?= $penyakit['kode_penyakit']; ?></td>
                                <td><?= $penyakit['nama_penyakit']; ?></td>
                                <td><?= $penyakit['deskripsi']; ?></td>
                                <td><?= $penyakit['solusi_obat']; ?></td>
                                <td><?= $penyakit['solusi_lain']; ?></td>
                                <td class="text-center">
                                    <form action="/admin/ubahpenyakit/<?= $penyakit['id_penyakit']; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-warning btn-sm btn-block">Ubah</button>
                                    </form>

                                    <button type="button" data-toggle="modal" data-target="#modalHapus" class="mt-2 btn btn-danger btn-sm btn-block">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Data -->
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <form action="/admin/hapuspenyakit/<?= $penyakit['id_penyakit']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>