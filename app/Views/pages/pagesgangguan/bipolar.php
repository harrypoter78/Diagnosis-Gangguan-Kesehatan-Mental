<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Bipolar Disorder</h2>
            <h5 class="mb-5 text-justify">
                <em>Gangguan bipolar adalah kondisi seseorang yang mengalami perubahan suasana
                    hati secara fluktuatif dan drastis, misalnya tiba-tiba menjadi sangat bahagia dari yang
                    sebelumnya murung. Nama lain dari gangguan bipolar adalah manik depresif.
                </em>
            </h5>
            <h5 class="mb-3 text-justify">Daftar Gejala</h5>
            <table class="table text-center table-bordered table-md">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gejala</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th scope="row">1</th>
                        <td>Sering/mudah menangis</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">2</th>
                        <td>Diliputi perasaan bersalah berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Kehilangan Motivasi</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Mood swing</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Kurangnya dara ingat</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Bicara terlalu cepat</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">7</th>
                        <td>Mempercayai sesuatu yang tidak nyata</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>