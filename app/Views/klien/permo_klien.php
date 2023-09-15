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
            <h5 class="card-title">Permohonan Klien</h5>

          

            <form method="post" action="<?= base_url('klien/permo_klien/save_permo') ?>">
            <?php if (isset($validation) && $validation->getErrors()): ?>
              <div class="alert alert-danger">
                  <ul>
                      <?php foreach ($validation->getErrors() as $error): ?>
                          <li><?= esc($error) ?></li>
                      <?php endforeach; ?>
                  </ul>
              </div>
          <?php endif; ?>
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
                  <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $dataKlien['nama_klien'] ?>">
              </div>
          </div>
          <div class="row mb-3">
              <label for="alamat_pemohon" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" value="<?= $dataKlien['alamat'] ?>">
              </div>
          </div>
              <div class="row mb-3">
              <label for="tujuan_pemohon" class="col-sm-2 col-form-label">Tujuan Permohonan</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="tujuan_pemohon" name="tujuan_pemohon" value="<?= isset($dataKlien['tujuan_pemohon']) ? $dataKlien['tujuan_pemohon'] : '' ?>">
              </div>
          </div>
              <div class="row mb-3">
                <label for="tgl_permohonan" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan" value="<?= isset($dataKlien['tgl_permohonan']) ? $dataKlien['tgl_permohonan'] : '' ?>">
                </div>
              </div>
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Akta</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_akta" id="jenis_akta" value="jenis 1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Jenis 1
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_akta" id="jenis_akta" value="jenis 2">
                    <label class="form-check-label" for="gridRadios2">
                      Jenis 2
                    </label>
                  </div>
                </div>
              </fieldset>

              <div class="row mb-3">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="isi" name="isi" value="<?= isset($dataKlien['isi']) ? $dataKlien['isi'] : '' ?>">
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