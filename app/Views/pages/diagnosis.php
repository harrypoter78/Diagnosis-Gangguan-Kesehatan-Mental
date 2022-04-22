<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-section" id="diagnosis">
    <div class="container">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Pilih Gejala</h2>
        </div>
        <form class="was-validated" action="hasil" method="POST">
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Kesulitan tidur</label>
                <select class="col-sm-2 custom-select" name="selectG1" required>
                    <option value="">-Pilih-</option>
                    <option value="G1">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Mendengar suara aneh</label>
                <select class="col-sm-2 custom-select" name="selectG2" required>
                    <option value="">-Pilih-</option>
                    <option value="G2">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Sering atau mudah menangis</label>
                <select class="col-sm-2 custom-select" name="selectG3" required>
                    <option value="">-Pilih-</option>
                    <option value="G3">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Kehilangan minat untuk
                    melakukan aktivitas</label>
                <select class="col-sm-2 custom-select" name="selectG4" required>
                    <option value="">-Pilih-</option>
                    <option value="G4">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Emosi menjadi datar</label>
                <select class="col-sm-2 custom-select" name="selectG5" required>
                    <option value="">-Pilih-</option>
                    <option value="G5">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Ingatan terganggu</label>
                <select class="col-sm-2 custom-select" name="selectG6" required>
                    <option value="">-Pilih-</option>
                    <option value="G6">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Menjauh dari lingkungan sosial</label>
                <select class="col-sm-2 custom-select" name="selectG7" required>
                    <option value="">-Pilih-</option>
                    <option value="G7">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Pikiran dan berbicara kacau</label>
                <select class="col-sm-2 custom-select" name="selectG8" required>
                    <option value="">-Pilih-</option>
                    <option value="G8">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Rasa takut dan khawatir berlebihan</label>
                <select class="col-sm-2 custom-select" name="selectG9" required>
                    <option value="">-Pilih-</option>
                    <option value="G9">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Mimpi buruk</label>
                <select class="col-sm-2 custom-select" name="selectG10" required>
                    <option value="">-Pilih-</option>
                    <option value="G10">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Sering merasa sedih</label>
                <select class="col-sm-2 custom-select" name="selectG11" required>
                    <option value="">-Pilih-</option>
                    <option value="G11">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Mempercayai sesuatu yang tidak
                    nyata</label>
                <select class="col-sm-2 custom-select" name="selectG12" required>
                    <option value="">-Pilih-</option>
                    <option value="G12">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Sulit mengendalikan emosi
                </label>
                <select class="col-sm-2 custom-select" name="selectG13" required>
                    <option value="">-Pilih-</option>
                    <option value="G13">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Diliputi perasaan bersalah berlebihan
                </label>
                <select class="col-sm-2 custom-select" name="selectG14" required>
                    <option value="">-Pilih-</option>
                    <option value="G14">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Perasaan bermusuhan
                </label>
                <select class="col-sm-2 custom-select" name="selectG15" required>
                    <option value="">-Pilih-</option>
                    <option value="G15">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Menghindari sebuah tempat atau objek
                </label>
                <select class="col-sm-2 custom-select" name="selectG16" required>
                    <option value="">-Pilih-</option>
                    <option value="G16">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Kehilangan motivasi
                </label>
                <select class="col-sm-2 custom-select" name="selectG17" required>
                    <option value="">-Pilih-</option>
                    <option value="G17">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Sering cemas
                </label>
                <select class="col-sm-2 custom-select" name="selectG18" required>
                    <option value="">-Pilih-</option>
                    <option value="G18">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Mood swing
                </label>
                <select class="col-sm-2 custom-select" name="selectG19" required>
                    <option value="">-Pilih-</option>
                    <option value="G19">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Perasaan putus asa
                </label>
                <select class="col-sm-2 custom-select" name="selectG20" required>
                    <option value="">-Pilih-</option>
                    <option value="G20">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Kurangnya daya ingat
                </label>
                <select class="col-sm-2 custom-select" name="selectG21" required>
                    <option value="">-Pilih-</option>
                    <option value="G21">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Bicara terlalu cepat
                </label>
                <select class="col-sm-2 custom-select" name="selectG22" required>
                    <option value="">-Pilih-</option>
                    <option value="G22">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Gangguan pernapasan
                </label>
                <select class="col-sm-2 custom-select" name="selectG23" required>
                    <option value="">-Pilih-</option>
                    <option value="G23">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Gerakan tubuh dan pikiran yang lambat
                </label>
                <select class="col-sm-2 custom-select" name="selectG24" required>
                    <option value="">-Pilih-</option>
                    <option value="G24">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Merasa kelebihan berat badan
                </label>
                <select class="col-sm-2 custom-select" name="selectG25" required>
                    <option value="">-Pilih-</option>
                    <option value="G25">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Makan dalam jumlah besar dan dikeluarkan secara paksa
                </label>
                <select class="col-sm-2 custom-select" name="selectG26" required>
                    <option value="">-Pilih-</option>
                    <option value="G26">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Memiliki obsesi konstan terhadap sesuatu
                </label>
                <select class="col-sm-2 custom-select" name="selectG27" required>
                    <option value="">-Pilih-</option>
                    <option value="G27">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Melakukan aksi tertentu secara berulang untuk meredakan kecemasan
                </label>
                <select class="col-sm-2 custom-select" name="selectG28" required>
                    <option value="">-Pilih-</option>
                    <option value="G28">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Takut kotor atau terkena penyakit
                </label>
                <select class="col-sm-2 custom-select" name="selectG29" required>
                    <option value="">-Pilih-</option>
                    <option value="G29">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Sangat menginginkan segala
                    sesuatu tersusun selaras atau teratur
                </label>
                <select class="col-sm-2 custom-select" name="selectG30" required>
                    <option value="">-Pilih-</option>
                    <option value="G30">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Suka atau berkeinginan untuk
                    mengumpulkan barang-barang bekas yang Anda temukan
                </label>
                <select class="col-sm-2 custom-select" name="selectG31" required>
                    <option value="">-Pilih-</option>
                    <option value="G31">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row border-bottom border-dark">
                <label class="col-sm-10 col-form-label-lg">Memiliki obsesi akan kalori dan
                    lemak yang terkandung pada makanan
                </label>
                <select class="col-sm-2 custom-select" name="selectG32" required>
                    <option value="">-Pilih-</option>
                    <option value="G32">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <div class="form-group row">
                <label class="col-sm-10 col-form-label-lg">Memiliki perubahan periode pada
                    saat sering sekali makan atau bahkan tidak sama sekali
                </label>
                <select class="col-sm-2 custom-select" name="selectG33" required>
                    <option value="">-Pilih-</option>
                    <option value="G33">Ya</option>
                    <option value="N">Tidak</option>
                </select>

            </div>
            <button class="mt-5 btn btn-primary btn-lg btn-block" type="submit" name="submit">Diagnosis</button>
        </form>

    </div>
</section>


<?= $this->endSection(); ?>