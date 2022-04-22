<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Paranoia</h2>
            <h5 class="mb-5 text-justify">
                <em>Gangguan kepribadian paranoid adalah jenis gangguan kepribadian eksentrik di
                    mana pengidapnya memiliki rasa curiga dan tidak percaya yang tak ada hentinya
                    terhadap orang lain.
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
                        <td>Menjauh dari lingkungan sosial</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">2</th>
                        <td>Rasa Takut dan khawatir berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Perasaan bermusuhan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Sering cemas</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Gangguan Pernafasan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Gerakan tubuh dan pikiran yang lambat</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>