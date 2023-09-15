<!DOCTYPE html>
<html lang="en">

<head>

    <title>Clien - NiceAdmin Bootstrap Template</title>
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
            <h1>Clien</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Clien</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
              <h3 class="card-title">TAMBAH DATA KLIEN</h3>

              <!-- Custom Styled Validation with Tooltips -->
              <form class="row g-3 needs-validation" novalidate name="klien" method="POST" action="klien/Klien/tambahdata">
                <div class="">
                 
                  <input type="hidden" class="form-control" id="client_number" name="client_number" value="<?= session('client_number') ?>" readonly>
              
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label">Nama Klien</label>
                  <input type="text" class="form-control" id="nama_klien" name="nama_klien" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip02" class="form-label">No KTP</label>
                  <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip02" class="form-label">Tempat Lahir </label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
               
                <div class="col-md-2 position-relative">
                  <label for="validationTooltip03" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                  <div class="invalid-tooltip">
                    Please provide a valid date.
                  </div>
                </div>
                <div class="col-md-2 position-relative">
                  <label for="validationTooltip04" class="form-label">Agama</label>
                  <select class="form-select" id="agama" name="agama" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Konghucu</option>
                  </select>
                  <div class="invalid-tooltip">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-2 position-relative">
                  <label for="validationTooltip04" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                  
                  </select>
                  <div class="invalid-tooltip">
                    Please select a valid state.
                  </div>
                </div>
               
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip05" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                  <div class="invalid-tooltip">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip05" class="form-label">No Hp</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" required>
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
                                        <th scope="col">Client Number</th>
                                        <th scope="col">Nama Klien</th>
                                        <th scope="col">Nomor KTP</th>
                                        <th scope="col">Tempat Lahir</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Agama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No.Handphone</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($klien as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>

                                            <td><?= $row['client_number']; ?></td>
                                            <td><?= $row['nama_klien']; ?></td>
                                            <td><?= $row['no_ktp']; ?></td>
                                            <td><?= $row['tempat_lahir']; ?></td>
                                            <td><?= $row['tgl_lahir']; ?></td>
                                            <td><?= $row['agama']; ?></td>
                                            <td><?= $row['jenis_kelamin']; ?></td>
                                            <td><?= $row['alamat']; ?></td>
                                            <td><?= $row['no_hp']; ?></td>
                                            <td>

                                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $row['id_klien']; ?>" class="btn btn-primary " id="btn-edit"><i class="bi bi-pen"></i></button>
                                                <!-- <a href="/permohonan/Permohonan/deleteData/<?= $row['id_klien']; ?>"> -->
                                                <button type="button" onclick="confirmdelete()" class="btn btn-danger btn-hapus" data-id="<?= $row['id_klien']; ?>"><i class="bi bi-trash"></i></button>
                                                <!-- </a> -->
                                                <!-- Bagian tampilan HTML lainnya -->
                                                <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
                                                <script>
                                                    function confirmdelete() {
                                                        if (confirm("Apakah Anda Ingin Menghapus Data?")) {
                                                            window.location.href = "/klien/Klien/deleteData/<?= $row['id_klien']; ?>";
                                                        }
                                                    }
                                                </script>
                                                <!-- Bagian tampilan HTML lainnya -->


                                            </td>
                                            <div class="modal fade" id="modalUbah<?= $row['id_klien']; ?>" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Permohonan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3" name="klien" method="POST" action="klien/Klien/updatedata">
                                                                <input type="hidden" name="id_klien" id="id_klien" value="<?= $row['id_klien']; ?>">
                                                                <div class="row mb-3">
                                                                    <div class="col-sm-10">
                                                                        <input type="hidden" class="form-control" id="client_number" name="client_number" value="<?= session('client_number') ?>" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="nama_klien" class="form-label">Nama Klien</label>
                                                                    <input type="text" class="form-control" id="nama_klien" name="nama_klien" value="<?= $row['nama_klien'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="no_ktp" class="form-label">Nomor KTP</label>
                                                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?= $row['no_ktp'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="agama" class="form-label">Agama</label>
                                                                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $row['agama'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="alamat" class="form-label">Alamat</label>
                                                                    <input type="textarea" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="no_hp" class="form-label">No. Handphone</label>
                                                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $row['no_hp'] ?>">
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

        <?php if (session()->has('error')) : ?>
            <div class="alert alert-danger">
                <?= session('error') ?>
            </div>
        <?php endif; ?>


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