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
          <h5 class="card-title">Klien</h5>
          <?php if (session('validation')) : ?>
            <div class="alert alert-danger">
              <?php echo session('validation')->listErrors(); ?>
            </div>
          <?php endif; ?>

          <!-- Horizontal Form -->
          <form method="post" action="<?= base_url('klien/isi_klien/save') ?>">
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="client_number" name="client_number" value="<?= session('client_number') ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nama_klien" class="col-sm-2 col-form-label"> Nama Anda </label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_klien" name="nama_klien" value="<?php echo session()->get('name');?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
    <label for="no_ktp" class="col-sm-2 col-form-label">Nomor KTP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nor_ktp" name="no_ktp" value="<?= old('no_ktp') ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir') ?>">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" <?= (old('jenis_kelamin') == 'laki-laki') ? 'checked' : '' ?>>
        <label class="form-check-label" for="gridRadios1">
          Laki - laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?= (old('jenis_kelamin') == 'perempuan') ? 'checked' : '' ?>>
        <label class="form-check-label" for="gridRadios2">
          Perempuan
        </label>
      </div>
    </div>
  </fieldset>

  <div class="row mb-3">
    <label for="agama" class="col-sm-2 col-form-label">agama</label>
    <div class="col-sm-10">
      <select name="agama" id="agama" class="form-control">
        <option value="none">--Pilih--</option>
        <option value="islam" <?= (old('agama') == 'islam') ? 'selected' : '' ?>>Islam</option>
        <option value="kristen" <?= (old('agama') == 'kristen') ? 'selected' : '' ?>>Kristen</option>
        <option value="hindu" <?= (old('agama') == 'hindu') ? 'selected' : '' ?>>Hindu</option>
        <option value="budha" <?= (old('agama') == 'budha') ? 'selected' : '' ?>>Budha</option>
        <option value="konghucu" <?= (old('agama') == 'konghucu') ? 'selected' : '' ?>>Konghucu</option>
      </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="no_hp" class="col-sm-2 col-form-label">No.Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= old('no_hp') ?>">
    </div>
  </div>
  <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Horizontal Form -->



        </div>
      </div>
    </section>




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
    <script>
      // Fungsi untuk menghasilkan nomor klien otomatis
      function generateClientNumber() {
        var counter = 1; // Ganti ini dengan nilai counter dari database jika diperlukan
        var formattedCounter = ('000' + counter).slice(-3); // Format counter menjadi tiga digit dengan angka nol di depan
        var clientNumber = 'P' + formattedCounter;
        return clientNumber;
      }

      // Saat halaman dimuat, set nilai input dengan nomor klien yang diteruskan
      document.addEventListener('DOMContentLoaded', function() {
        var clientNumberInput = document.getElementById('client_number');
        if (clientNumberInput) {
          clientNumberInput.value = generateClientNumber();
        }
      });
    </script>


</body>

</html>