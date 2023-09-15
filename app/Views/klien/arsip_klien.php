<!DOCTYPE html>
<html lang="en">

<head>

  <title>Isi Data</title>
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
          <h5 class="card-title">Arsip Klien</h5>
          <h5 class="card-title">Klien</h5>
          <?php if(isset($validation)): ?>
<div class="alert alert-danger">
    <?= $validation->listErrors() ?>
</div>
<?php endif; ?>
          <form method="post" action="<?= base_url('klien/arsip_klien/save_arsip') ?>">
        
          <?php if(isset($dataKlien)): ?>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nomor Klien</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="client_number" name="client_number" value="<?= $dataKlien['client_number'] ?>" readonly> 
              </div>
            </div>
            <div class="row mb-3">
              <label for="nama_pemohon" class="col-sm-2 col-form-label"> Nama Anda </label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $dataKlien['nama_pemohon'] ?>"readonly> 
              </div> 
            </div>
            <div class="row mb-3">
              <label for="nama_arsip" class="col-sm-2 col-form-label">Nama Arsip</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_arsip" name="nama_arsip" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="jenis_arsip" class="col-sm-2 col-form-label">Jenis Arsip</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="jenis_arsip" name="jenis_arsip">
              </div>
            </div>
            <div class="row mb-3">
              <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
              <div class="col-sm-10">
              <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>"readonly> 
              </div>
            </div>
            <div class="row mb-3">
              <label for="nomor_urut_laci" class="col-sm-2 col-form-label">Laci</label> 
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomor_urut_laci" name="nomor_urut_laci"value="<?= $dataKlien['nomor_urut_laci'] ?>"readonly> 
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <?php endif; ?>

          </form><!-- End Horizontal Form -->








 
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