<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

    <!-- Datepicker template-->
    <link href="<?php echo base_url('datepicker/libraries/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet">

</head>


<body id="page-top">
    <?= $this->include('layout/admin/sidebar'); ?>
    <?= $this->include('layout/admin/topbar'); ?>
    <?= $this->renderSection('content'); ?>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/js/demo/chart-pie-demo.js'); ?>"></script>
    <script src="<?php echo base_url('startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js'); ?>"></script>

    <!-- Datepicker -->
    <script src="<?php echo base_url('datepicker/libraries/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('datepicker/libraries/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?php echo base_url('datepicker/js/custom.js'); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style type="text/css">
        .bg-cover {
            background-image: url('/image/jbt.png');
        }

        .jumbotron {
            background-size: 100% auto;
            /* Image in the center of container */
            background-position: center center;
        }

        .carousel {
            height: 400px;
        }

        .carousel-item,
        .carousel-inner,
        .carousel-inner img {
            height: 100%;
            width: auto;
        }

        .carousel-item {
            text-align: center;
        }
    </style>
    <script>
        $(document).ready(function() {
            setDatePicker()
        })
    </script>



</body>

</html>