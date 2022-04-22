<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Anxiety Disorder</h2>
            <h5 class="mb-5 text-justify">
                <em>Rasa cemas atau anxiety adalah hal yang normal dirasakan ketika seseorang
                    menghadapi situasi atau mendengar berita yang menimbulkan rasa takut atau khawatir.
                    Namun, anxiety perlu diwaspadai jika muncul tanpa sebab atau sulit dikendalikan,
                    karena bisa jadi hal tersebut disebabkan oleh gangguan kecemasan.
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
                        <td>Rasa takut dan khawatir berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">3</th>
                        <td>Sulit mengendalikan emosi</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Sering cemas</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Gangguan pernapasan</td>
                    </tr>

                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>