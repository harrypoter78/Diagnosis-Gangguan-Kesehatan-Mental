<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Obsessive Compulsive Disorder (OCD)</h2>
            <h5 class="mb-5 text-justify">
                <em>Obsessive compulsive disorder (OCD) adalah gangguan mental yang
                    menyebabkan penderitanya merasa harus melakukan suatu tindakan secara berulang-ulang. Bila tidak dilakukan, penderita OCD akan diliputi kecemasan atau ketakutan
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
                        <td>Sering cemas</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">2</th>
                        <td>Memiliki obsesi konstan terhadap sesuatu</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Melakukan aksi tertentu secara berulang untuk meredakan kecemasan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Takut kotor atau terkena penyakit</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Sangat menginginkan segala sesuatu tersusun selaras atau teratur</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Suka atau berkeinginan untuk mengumpulkan barang-barang bekas yang Anda temukan</td>
                    </tr>

                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>