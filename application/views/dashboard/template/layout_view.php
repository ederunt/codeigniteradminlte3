<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo PATH_PLUGINS; ?>fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo PATH_PLUGINS; ?>overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo PATH_DIST; ?>css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('dashboard/template/header_view'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="<?php echo PATH_DIST; ?>img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <?php $this->load->view('dashboard/template/sidebar_view'); ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php $this->load->view($container); ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php $this->load->view('dashboard/template/footer_view'); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo PATH_PLUGINS; ?>jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo PATH_PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo PATH_PLUGINS; ?>overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo PATH_DIST; ?>js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo PATH_DIST; ?>js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo PATH_PLUGINS; ?>jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo PATH_PLUGINS; ?>raphael/raphael.min.js"></script>
<script src="<?php echo PATH_PLUGINS; ?>jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo PATH_PLUGINS; ?>jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo PATH_PLUGINS; ?>chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo PATH_DIST; ?>js/pages/dashboard2.js"></script>

<script src="<?php echo PATH_JS; ?>/parsley-validator/parsley.min.js"></script>
<script src="<?php echo PATH_JS;?>/parsley-validator/i18n/es.js"></script>



<script type="text/javascript">
$(function () {    
    $('#users-form').parsley()
        .on('field:error', function(){            
            this.$element.removeClass('is-valid').addClass('is-invalid');
        })
        .on('field:success', function(){
            this.$element.removeClass('is-invalid').addClass('is-valid');
        })
        .on('field:validated', function() {})
        .on('form:submit', function() {});
});
</script>



</body>
</html>
