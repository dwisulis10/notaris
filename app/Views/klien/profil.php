<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <?php
    echo $this->include('layout/v_head');
    ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- End Header -->
    <?php
    echo $this->include('layout/v_header');
    ?>
    <!-- ======= Sidebar ======= -->
    <?php
    echo $this->include('layout_klien/sidebar');
    ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">My profil</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="row">
                <div class="col-lg-15">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">Profil</h1>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-15">

                        <div class="card">
                            <div class="card-body">

                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                        <h5 class="card-title">Profile Details</h5>
                                        <button class="btn btn-primary btn-sm" id="editProfile">Edit</button>




                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name :</div>
                                            <div class="col-lg-9 col-md-8"> <?php echo session()->get('name'); ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Username :</div>
                                            <div class="col-lg-9 col-md-8"> <?php echo session()->get('username'); ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email :</div>
                                            <div class="col-lg-9 col-md-8"> <?php echo session()->get('email'); ?></div>
                                        </div>



                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-15">

                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="card-title">Data Anda</h1>
                                        </h1>
                                        <?php {
                                            echo "<h5 class='header_kanan'> Anda belum memliki data apapun !!</h5>";
                                        } ?>
                                    </div>
                                </div>

                            </div>


                            <!-- ======= Footer ======= -->
                            <footer id="footer" class="footer">


                        </div>
                        </footer><!-- End Footer -->

                        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                        <!-- Vendor JS Files -->

                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

                        <!-- Template Main JS File -->
                        <script src="<?php echo base_url(); ?>assets/themes/NiceAdmin/assets/js/main.js"></script>

</body>

</html>