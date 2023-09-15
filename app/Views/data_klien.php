<!DOCTYPE html>
<html lang="en">

<head>

  <title>Permohonan - NiceAdmin Bootstrap Template</title>
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
  echo $this->include('layout/v_sidebar');
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Clien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Master</li>
          <li class="breadcrumb-item active">Data Clien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Clien</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>

                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Klien</th>
                    <th scope="col">Nomor KTP</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Handphone</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($klien as $row) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row['nama_klien']; ?></td>
                      <td><?= $row['no_ktp']; ?></td>
                      <td><?= $row['tempat_lahir']; ?></td>
                      <td><?= $row['tgl_lahir']; ?></td>
                      <td><?= $row['agama']; ?></td>
                      <td><?= $row['jenis_kelamin']; ?></td>
                      <td><?= $row['alamat']; ?></td>
                      <td><?= $row['no_hp']; ?></td>

                    <?php
                  }
                    ?>
            </div>
          </div>
        </div>
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
  </main>
</body>

</html>