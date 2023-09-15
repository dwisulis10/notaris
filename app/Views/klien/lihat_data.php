
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
            <h1>Lihat Data Klien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Lihat Data Klien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data Anda</h1>
                    <section class="section dashboard">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Klien</h5>
     <h1>Data Klien</h1>
     <?php if ($data_klien) : ?>
<table border="1">
    <thead>
        <tr>
            <th>Client Number</th>
            <th>Nama Klien</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
   
            <tr>
            <td><?= $data_klien['client_number']; ?></td>
                    <td><?= $data_klien['nama_klien']; ?></td>
    <!-- Tambahkan item data lainnya sesuai kebutuhan -->
            </tr>
       
    </tbody>
</table>
<?php else : ?>
        <p>Data klien tidak ditemukan.</p>
    <?php endif; ?>

            

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
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