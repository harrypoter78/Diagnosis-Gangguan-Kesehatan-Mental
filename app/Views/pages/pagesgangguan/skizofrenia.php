<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Skizofrenia</h2>
            <h5 class="mb-5 text-justify">
                <em>Skizofrenia adalah gangguan mental yang terjadi dalam jangka panjang.
                    Gangguan ini menyebabkan penderitanya mengalami halusinasi, delusi atau waham,
                    kekacauan berpikir, dan perubahan perilaku. Gejala tersebut merupakan gejala dari psikosis,
                    yaitu kondisi di mana penderitanya kesulitan membedakan kenyataan dengan pikirannya sendiri.
                    Skizofrenia sering disamakan dengan psikosis, padahal keduanya berbeda. Psikosis hanya salah satu
                    gejala dari beberapa gangguan mental, di antaranya skizofrenia.</em>
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
                        <td>Mendengar suara-suara aneh</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Emosi menjadi datar</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Menjauh dari lingkungan sosial</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Pikiran dan berbicara kacau</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Mempercayai sesuatu yang tidak nyata</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>