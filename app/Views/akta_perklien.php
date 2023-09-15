<!DOCTYPE html>
<html lang="en">

<head>

  <title>Laporan Akta Per Klien</title>
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
      <h1>Laporan Akta Per Klien</h1> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Laporan </li>
          <li class="breadcrumb-item active">Laporan Akta Per Klien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lap.Akta Perklien</h5>

              <!-- Form pencarian berdasarkan tanggal -->
    <form action="<?= base_url('akta_perklien/search'); ?>" method="post">
    
        <button type="button" onclick="printData()"><i class="bi bi-printer"></i> Cetak Semua
                                Data</button>
    </form>
    
    <!-- Tabel untuk menampilkan data permohonan -->
    <table class="table datatable">
    <thead>

<tr>
  <th scope="col">No</th>
  <th scope="col">Nama Klien</th>
  
  <th scope="col">Jenis Akta</th>
  <th scope="col">Nomor Akta</th>
 
  
</tr>
</thead>
                                <tbody>


                                    <?php
                                     $no = 1;
                                     foreach ($akta as $row): ?>

                                      <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row['nama_pemohon']; ?></td>
                    
                      <td><?= $row['jenis_akta']; ?></td>
                      <td><?= $row['nomor_akta']; ?></td>
                   
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
        window.location.href = "<?= base_url('akta_perklien/printAll'); ?>";
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