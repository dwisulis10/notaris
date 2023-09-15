
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
  <!-- End Sidebar-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Permohonan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Permohonan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <h1>Permohonan</h1>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">TAMBAH DATA PERMOHONAN</h3>

              <!-- Custom Styled Validation with Tooltips -->
              <form class="row g-3 needs-validation" novalidate name="permohonan" method="POST" action="permohonan/Permohonan/tambahdata">

              <div class="col-md-2 position-relative">
  <label for="validationTooltip01" class="form-label">Client Number</label>
  <input type="text" class="form-control" id="client_number" name="client_number" value="<?= session('client_number') ?>" readonly>
  <div class="valid-tooltip">
    Looks good!
  </div>
 
</div>

  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nama pemohon</label>
    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= session('nama_klien') ?>" readonly>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Alamat pemohon</label>
    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" value="<?= session('alamat') ?>" readonly>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>

                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">Tujuan Pemohon </label>
                  <input type="text" class="form-control" id="tujuan_pemohon" name="tujuan_pemohon" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-2 position-relative">
                  <label for="validationTooltip03" class="form-label">Tanggal Permohonan</label>
                  <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan" required>
                  <div class="invalid-tooltip">
                    Please provide a valid date.
                  </div>
                </div>
                <div class="col-md-2 position-relative">
                  <label for="validationTooltip04" class="form-label">Jenis Akta</label>
                  <select class="form-select" id="jenis_akta" name="jenis_akta" required>
                    <option selected disabled value="">Choose...</option>
                    <option>jenis 1</option>
                    <option>jenis 2</option>

                  </select>
                  <div class="invalid-tooltip">
                    Please select a valid state.
                  </div>
                </div>



                <div class="col-md-4 position-relative">
                  <label for="validationTooltip05" class="form-label">Isi Permohonan</label>
                  <input type="text" class="form-control" id="isi" name="isi" required>
                  <div class="invalid-tooltip">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>

              </form><!-- End Custom Styled Validation with Tooltips -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Permohonan</h5>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"> <i class="bi bi-plus">Tambah Data </i></a>
        <!-- Table with stripped rows -->
        <table class="table datatable">
          <thead>

            <tr>
              <th scope="col">No</th>
              <th scope="col">Client Number</th>
              <th scope="col">Nama Klien</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Tanggal Permohonan</th>
              <th scope="col">Jenis Akta</th>
              <th scope="col">Isi Permohonan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($permohonan as $row) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['client_number']; ?></td>
                <td><?= $row['nama_pemohon']; ?></td>
                <td><?= $row['alamat_pemohon']; ?></td>
                <td><?= $row['tujuan_pemohon']; ?></td>
                <td><?= $row['tgl_permohonan']; ?></td>
                <td><?= $row['jenis_akta']; ?></td>
                <td><?= $row['isi']; ?></td>
                <td>

                  <button type="button" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $row['id_permohonan']; ?>" class="btn btn-primary " id="btn-edit"><i class="bi bi-pen"></i></button>
                  <!-- <a href="/permohonan/Permohonan/deleteData/<?= $row['id_permohonan']; ?>"> -->
                  <button type="button" onclick="confirmdelete()" class="btn btn-danger btn-hapus" data-id="<?= $row['id_permohonan']; ?>"><i class="bi bi-trash"></i></button>
                  <!-- </a> -->
                  <!-- Bagian tampilan HTML lainnya -->
                  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
                  <script>
                    function confirmdelete() {
                      if (confirm("Apakah Anda Ingin Menghapus Data?")) {
                        window.location.href = "/permohonan/Permohonan/deleteData/<?= $row['id_permohonan']; ?>";
                      }
                    }
                  </script>
                  <!-- Bagian tampilan HTML lainnya -->


                </td>
                <div class="modal fade" id="modalUbah<?= $row['id_permohonan']; ?>" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Update Permohonan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row g-3" name="pemohon" method="POST" action="permohonan/Permohonan/updatedata">
                          <input type="hidden" name="id_permohonan" id="id_permohonan" value="<?= $row['id_permohonan']; ?>">

                          <div class="col-12">
                            <label for="nama_pemohon" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $row['nama_pemohon'] ?>">
                          </div>
                          <div class="col-12">
                            <label for="alamat_pemohon" class="form-label">Alamat</label>
                            <input type="textarea" class="form-control" id="alamat_pemohon" name="alamat_pemohon" value="<?= $row['alamat_pemohon'] ?>">
                          </div>
                          <div class="col-12">
                            <label for="tujuan_pemohon" class="form-label">Tujuan Permohonan</label>
                            <input type="text" class="form-control" id="tujuan_pemohon" name="tujuan_pemohon" value="<?= $row['tujuan_pemohon'] ?>">
                          </div>
                          <div class="col-12">
                            <label for="tgl_permohonan" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan" value="<?= $row['tgl_permohonan'] ?>">
                          </div>
                          <div class="col-12">
                            <label for="jenis_akta" class="form-label">Jenis Akta</label>
                            <select name="jenis_akta" id="jenis_akta" class="form-control">
                              <option value="none">Pilih Jenis Akta</option>
                              <option value="jenis1" <?= ($row['jenis_akta'] === 'jenis1') ? 'selected' : ''; ?>>jenis 1</option>
                              <option value="jenis2" <?= ($row['jenis_akta'] === 'jenis2') ? 'selected' : ''; ?>>jenis 2</option>
                              <option value="jenis3" <?= ($row['jenis_akta'] === 'jenis3') ? 'selected' : ''; ?>>jenis 3</option>
                              <option value="jenis4" <?= ($row['jenis_akta'] === 'jenis4') ? 'selected' : ''; ?>>jenis 4</option>
                              <option value="jenis5" <?= ($row['jenis_akta'] === 'jenis5') ? 'selected' : ''; ?>>jenis 5</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label for="isi" class="form-label">Isi Permohonan</label>
                            <input type="text" class="form-control" id="isi" name="isi" value="<?= $row['isi'] ?>">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

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
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Mengisi otomatis field client_number dari session
    var clientNumber = "<?= session('client_number') ?>";
    document.getElementById("client_number").value = clientNumber;

    // Mengisi otomatis field nama_pemohon dan alamat_pemohon dari session (ganti sesuai dengan session yang sesuai)
    var namaPemohon = "<?= session('nama_klien') ?>";
    var alamatPemohon = "<?= session('alamat') ?>";
    document.getElementById("nama_pemohon").value = namaPemohon;
    document.getElementById("alamat_pemohon").value = alamatPemohon;
  });
</script>



</body>

</html>