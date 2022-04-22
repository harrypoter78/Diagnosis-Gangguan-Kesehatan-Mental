<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Depression</h2>
            <h5 class="mb-5 text-justify">
                <em>Depresi adalah gangguan suasana hati yang menyebabkan seseorang terus
                    merasa sedih dan kehilangan minat. Kondisi ini lebih dari sekadar perasaan sedih yang
                    normalnya dialami orang-orang dengan kondisi mentalnya sehat. Ini karena perasaan
                    sedih sangat sulit untuk disingkirkan sehingga terus menerus menghantui. Sebutan lain
                    untuk penyakit mental ini adalah depresi mayor atau depresi klinis, yang memengaruhi
                    perasaan, pemikiran, dan perilaku yang dapat menyebabkan berbagai masalah
                    emosional dan fisik.
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
                        <td>Kesulitan tidur</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">2</th>
                        <td>Kehilangan minat untuk melakukan aktivitas</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Sering merasa sedih</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Diliputi perasaan bersalah berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Perasaan putus asa</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>