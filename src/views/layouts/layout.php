<!DOCTYPE html>
<html lang="en" data-topbar-color="sadra" data-menu-color="sadra" data-bs-theme="light">



    

<head>
    <meta charset="utf-8" />
    <title>SADRA ENERGIES - CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <script>
        const URL_BASE = "<?= URL_BASE ?>"; 
    </script>

    <script src="<?= URL_BASE ?>assets/js/config.js"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=URL_BASE; ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?= URL_BASE ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= URL_BASE ?>assets/css/icons.min.css" rel="stylesheet" type="text/css"/>

    <!-- JQUERY -->
    <script src="<?= URL_BASE ?>assets/libs/jquery/jquery.min.js"></script>

    <!-- AXIOS -->
    <script src="<?= URL_BASE ?>assets/libs/axios/axios.min.js"></script>

    <!-- HELPERS -->
    <script src="<?= URL_BASE ?>js/helpers.js"></script>

    <!--ESTILOS PERSONALIZADOS-->
    <link href="<?= URL_BASE ?>css/personalizados.css" rel="stylesheet" type="text/css" />    

    <!-- JUST VALIDATE -->
    <script src="<?= URL_BASE ?>assets/libs/just-validate/just-validate.production.min.js"></script>

    <!--SWEET ALERT-->
    <link href="<?= URL_BASE ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script src="<?= URL_BASE ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- DATA TABLES CSS -->
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= URL_BASE ?>assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        
        <!-- ========== Topbar Start ========== -->
        <?php include_once __DIR__ . '/../shared/header.php';?>
        <!-- ========== Topbar End ========== -->
        
        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once __DIR__ . '/../shared/sidebar.php';?>
        <!-- ========== Left Sidebar End ========== -->

        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <?php 
                        if (isset($contenidoVista) && file_exists($contenidoVista)) {
                            include_once $contenidoVista;
                        } else {
                            echo "<div class='alert alert-danger'>Error: No se ha definido una vista válida.</div>";
                        }
                    ?>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include_once __DIR__ . '/../shared/footer.php';?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <!-- Vendor js -->
    <script src="<?= URL_BASE ?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= URL_BASE ?>assets/js/app.min.js"></script>
        <!-- Datatables js -->
    <script src="<?= URL_BASE ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= URL_BASE ?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

    <script src="<?= URL_BASE ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>



</body>

<div id="loadingOverlay">
    <div class="loadingBox">
        <div class="spinner"></div>
        <div class="loadingText">
            <!--<i class="fas fa-sync-alt"></i>-->
            <span>Procesando petición...</span>
        </div>
    </div>
</div>

</html>