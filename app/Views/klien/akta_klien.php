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
          <h5 class="card-title">Akta Klien</h5>
          <?php if(isset($validation)): ?>
<div class="alert alert-danger">
    <?= $validation->listErrors() ?>
</div>
<?php endif; ?>
          <form method="post" action="<?= base_url('klien/akta_klien/save_akta') ?>">
        
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
              <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $dataKlien['nama_pemohon'] ?>">
              </div> 
            </div>
            <div class="row mb-3">
    <label for="no_faktur" class="col-sm-2 col-form-label">Nomor Faktur</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="no_faktur" name="no_faktur" value="<?= isset($nomorFaktur) ? $nomorFaktur : '' ?>" readonly>
    </div>
</div>
            <div class="row mb-3">
              <label for="jenis_akta" class="col-sm-2 col-form-label">Jenis Akta</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="jenis_akta" name="jenis_akta" value="<?= $dataKlien['jenis_akta'] ?>">
              </div>
            </div>
            <div class="row mb-3">
        <label for="nomor_akta" class="col-sm-2 col-form-label">Nomor Akta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomor_akta" name="nomor_akta" value="<?= old('nomor_akta') ?>">
            <?php if (isset($validation) && $validation->hasError('nomor_akta')): ?>
                <span class="text-danger"><?= $validation->getError('nomor_akta') ?></span>
            <?php endif; ?>
        </div>
    </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">Nomor Urut Laci</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="nomor_urut_laci" id="nomor_urut_laci" value="1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Laci 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="nomor_urut_laci" id="nomor_urut_laci" value=" 2">
                  <label class="form-check-label" for="gridRadios2">
                    Laci 2
                  </label>
                </div>
              </div>
            </fieldset>

            <div class="row mb-3">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>">
            <?php if (isset($validation) && $validation->hasError('tanggal')): ?>
                <span class="text-danger"><?= $validation->getError('tanggal') ?></span>
            <?php endif; ?>
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