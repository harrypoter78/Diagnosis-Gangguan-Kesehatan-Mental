<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Eating Disorder</h2>
            <h5 class="mb-5 text-justify">
                <em>Gangguan makan adalah gangguan mental saat mengonsumsi makanan.
                    Penderita gangguan ini dapat mengonsumsi terlalu sedikit atau terlalu banyak makanan,
                    dan terobsesi pada berat badan atau bentuk tubuhnya.
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
                        <td>Rasa takut dan khawatir berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">2</th>
                        <td>Sulit mengendalikan emosi</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Sering cemas</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Merasa kelebihan berat badan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Makan dalam jumlah besar dan dikeluarkan secara paksa</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Memiliki obsesi akan kalori dan lemak yang terkandung pada makanan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">7</th>
                        <td>Memiliki perubahan periode pada saat sering sekali makan atau bahkan tidak sama sekali</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>