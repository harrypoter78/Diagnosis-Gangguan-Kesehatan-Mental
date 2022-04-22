<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-left">
            <h2 class="mb-4">Post Traumatic Stress Disorder (PTSD)</h2>
            <h5 class="mb-5 text-justify">
                <em>PTSD (Post-Traumatic Stress Disorder) atau gangguan stres pasca trauma
                    adalah kondisi kesehatan jiwa yang dipicu oleh peristiwa yang traumatis, baik dengan
                    mengalaminya maupun menyaksikannya. Kebanyakan orang yang mengalami kejadian
                    traumatis akan menghadapi kesulitan dalam menjalaninya, tetapi dengan waktu dan
                    perawatan diri yang baik, kesulitan akan berkurang. Jika pengalaman yang traumatis
                    tersebut tetap menghantui sampai membuat seseorang kesulitan dalam menjalani hidup,
                    maka orang tersebut mengidap PTSD.
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
                        <td>Ingatan terganggu</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">4</th>
                        <td>Rasa takut dan khawatir berlebihan</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">5</th>
                        <td>Mimpi buruk</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">6</th>
                        <td>Sulit mengendalikan emosi</td>
                    </tr>
                    <tr class="table-active">
                        <th scope="row">7</th>
                        <td>Menghindari sebuah tempat/objek</td>
                    </tr>
                </tbody>
            </table>
            <a class="mt-3 btn btn-primary" href="daftargangguan">
                <i class="fas fa-chevron-circle-left"></i> Daftar Gangguan Mental</a>
        </div>
</section>


<?= $this->endSection(); ?>