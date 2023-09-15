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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">


    <div class="card">
    <div class="card-body">
        <h1 class="card-title">Isikan Data Anda</h1>
 <a class='btn btn-primary' href='isi_klien'>Isi Data</a>
 <a class='btn btn-success' href='/klien/lihat_data'>Lihat Data</a>

    </div>
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/themes/NiceAdmin/assets/js/main.js"></script>

</body>

</html>