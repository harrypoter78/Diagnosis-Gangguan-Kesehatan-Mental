<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/css/stylish-portfolio.min.css'); ?>" rel="stylesheet">
    <style>
        .page-holder {
            min-height: 100vh;
            /* height: 100%; */
        }

        .bg-cover {
            background-image: url("bg.jpg");
            background-size: cover !important;
        }
    </style>
</head>

<body id="page-top">
    <?= $this->include('layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="text-muted small mb-0">Copyright &copy; Sistem Pakar Kelompok C3 2021</p>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('startbootstrap-stylish-portfolio-gh-pages/js/stylish-portfolio.min.js'); ?>"></script>

</body>

</html>