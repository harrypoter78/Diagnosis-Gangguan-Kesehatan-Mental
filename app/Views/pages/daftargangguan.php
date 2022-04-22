<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Daftar Gangguan -->
<section class="content-section" id="portfolio">
    <div class="container">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Gangguan Kesehatan Mental</h2>
            <br></br>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <a class="portfolio-item" href="skizofrenia">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Skizofrenia</div>
                            <p class="mb-0">Gangguan yang mempengaruhi kemampuan seseorang untuk berpikir, merasakan, dan berperilaku dengan baik</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/blue-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="ptsd">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Post Traumatic Stress Disorder (PTSD)</div>
                            <p class="mb-0">Gangguan kesehatan jiwa yang dipicu oleh peristiwa yang traumatis, baik dengan mengalaminya maupun menyaksikannya</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/gray-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="depression">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Depression</div>
                            <p class="mb-0">Gangguan suasana hati yang menyebabkan seseorang terus merasa sedih dan kehilangan minat</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/gray-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="bipolar">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Bipolar Disorder</div>
                            <p class="mb-0">Gangguan seseorang yang mengalami perubahan suasana hati secara fluktuatif dan drastis</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/blue-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="paranoia">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Paranoia</div>
                            <p class="mb-0">Gangguan Tidak percaya kepada orang lain secara tidak realistis atau merasa dianiaya</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/blue-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="eating">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Eating Disorder</div>
                            <p class="mb-0">Seseorang dengan gangguan ini dapat mengonsumsi terlalu sedikit atau terlalu banyak makanan</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/gray-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="ocd">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Obsessive Compulsive Disorder (OCD)</div>
                            <p class="mb-0">Gangguan mental yang menyebabkan penderitanya merasa harus melakukan suatu tindakan secara berulang-ulang</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/gray-texture.jpg'); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="anxiety">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">Anxiety Disorder</div>
                            <p class="mb-0">Gangguan kesehatan mental yang ditandai dengan perasaan khawatir, cemas, atau takut yang cukup kuat untuk mengganggu aktivitas sehari-hari</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/img/blue-texture.jpg'); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>