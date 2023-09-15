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
      <h1>Laporan Permohonan</h1> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Laporan </li>
          <li class="breadcrumb-item active">Laporan Permohonan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lap.Permohonan</h5>

              <!-- Form pencarian berdasarkan tanggal -->
    <form action="<?= base_url('laporan_permohonan/search'); ?>" method="post">
        <label for="start_date"></label>
        <input type="date" name="start_date" required>
        <label for="end_date"></label>
        <input type="date" name="end_date" required>
        <button type="submit"><i class="bi bi-search"></i></button>
        <button type="button" onclick="printData()"><i class="bi bi-printer"></i> Cetak Semua
                                Data</button>
    </form>
    
    <!-- Tabel untuk menampilkan data permohonan -->
    <table class="table datatable">
                                <thead>

                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Klien</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Tanggal Permohonan</th>
                                        <th scope="col">Jenis Akta</th>
                                        <th scope="col">Isi</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                     $no = 1;
                                     foreach ($permohonanData as $permohonan): ?>

                                      <tr>
                                          <td><?= $no++; ?></td>
                                          <td><?= $permohonan['nama_pemohon']; ?></td>
                                          <td><?= $permohonan['alamat_pemohon']; ?></td>
                                          <td><?= $permohonan['tujuan_pemohon']; ?></td>
                                          <td><?= $permohonan['tgl_permohonan']; ?></td>
                                          <td><?= $permohonan['jenis_akta']; ?></td>
                                          <td><?= $permohonan['isi']; ?></td>
                                          </tr>
                                         <?php endforeach; ?>

                                </tbody>
                            </table>
 


            </div>
          </div>

        </div>
      </div>


    </section>

    <script>
    function printData() {
        window.location.href = "<?= base_url('laporan_permohonan/printAll'); ?>";
    }
</script>

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