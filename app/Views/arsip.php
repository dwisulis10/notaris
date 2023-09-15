<!DOCTYPE html>
<html lang="en">

<head>

    <title>Arsip</title>
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
            <h1>Arsip</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Arsip</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">TAMBAH DATA ARSIP </h3>

                            <!-- Custom Styled Validation with Tooltips -->
                            <form class="row g-3 needs-validation" novalidate name="arsip" method="POST" action="arsip/Arsip/tambahdata">
                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltip01" class="form-label">Client Number</label>
                                    <input type="text" class="form-control" id="client_number" name="client_number" value="<?= session('client_number') ?>" >
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip01" class="form-label">Nama Arsip</label>
                                    <input type="text" class="form-control" id="nama_arsip" name="nama_arsip" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip02" class="form-label">Nama Pemohon</label>
                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= session('nama_pemohon') ?>" >
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltip03" class="form-label">Tanggal </label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"  value="<?= date('Y-m-d') ?>" readonly> 
                                    <div class="invalid-tooltip">
                                        Please provide a valid date.
                                    </div>
                                </div>
                                <div class="col-md-2 position-relative">
                                    <label for="validationTooltip03" class="form-label">Jenis Arsip</label>
                                    <input type="text" class="form-control" id="jenis_arsip" name="jenis_arsip" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid date.
                                    </div>
                                </div>
              
                                <div class="col-md-1 position-relative">
                                    <label for="validationTooltip02" class="form-label">Nomor Laci</label>
                                    <input type="text" class="form-control" id="nomor_urut_laci" name="nomor_urut_laci" value="<?= session('nomor_urut_lsci') ?>" >
                                    <div class="valid-tooltip">
                                        Looks good!
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

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Arsip</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>

                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Client Number</th>
                                        <th scope="col">Nama Arsip</th>
                                        <th scope="col">Nama Klien</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jenis Arsip</th>
                                        <th scope="col">Laci</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($arsip as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['client_number']; ?></td>
                                            <td><?= $row['nama_arsip']; ?></td>
                                            <td><?= $row['nama_pemohon']; ?></td>
                                            <td><?= $row['tanggal']; ?></td>
                                            <td><?= $row['jenis_arsip']; ?></td>
                                            <td><?= $row['nomor_urut_laci']; ?></td>
                                            <td>

                                                <button type="button" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $row['id_arsip']; ?>" class="btn btn-primary " id="btn-edit"><i class="bi bi-pen"></i></button>
                                                <!-- <a href="/permohonan/Permohonan/deleteData/<?= $row['id_arsip']; ?>"> -->
                                                <button type="button" onclick="confirmdelete()" class="btn btn-danger btn-hapus" data-id="<?= $row['id_arsip']; ?>"><i class="bi bi-trash"></i></button>
                                                <!-- </a> -->
                                                <!-- Bagian tampilan HTML lainnya -->
                                                <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
                                                <script>
                                                    function confirmdelete() {
                                                        if (confirm("Apakah Anda Ingin Menghapus Data?")) {
                                                            window.location.href = "/arsip/Arsip/deleteData/<?= $row['id_arsip']; ?>";
                                                        }
                                                    }
                                                </script>
                                                <!-- Bagian tampilan HTML lainnya -->


                                            </td>
                                            <div class="modal fade" id="modalUbah<?= $row['id_arsip']; ?>" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Arsip</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3" name="arsip" method="POST" action="arsip/Arsip/updatedata">
                                                                <input type="hidden" name="id_arsip" id="id_arsip" value="<?= $row['id_arsip']; ?>">
                                                                <div class="col-12">
                                                                    <label for="nama_arsip" class="form-label">Nama Arsip</label>
                                                                    <input type="text" class="form-control" id="nama_arsip" name="nama_arsip" value="<?= $row['nama_arsip'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="nama_pemohon" class="form-label">Nama pemohon</label>
                                                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $row['nama_pemohon'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="tanggal" class="form-label">Tanggal</label>
                                                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $row['tanggal'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="jenis_arsip" class="form-label">Jenis Arsip </label>
                                                                    <input type="text" class="form-control" id="jenis_arsip" name="jenis_arsip" value="<?= $row['jenis_arsip'] ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="nomor_urut_laci" class="form-label">Laci</label>
                                                                    <select name="nomor_urut_laci" id="nomor_urut_laci" class="form-control" value="<?= $row['nomor_urut_laci'] ?>">
                                                                        <option value="none">--Pilih Jenis Laci--</option>
                                                                        <optgroup label="nomor_urut_laci">
                                                                            <option value="1" <?= ($row['nomor_urut_laci'] === '1') ? 'selected' : ''; ?>> 1</option>
                                                                            <option value="2" <?= ($row['nomor_urut_laci'] === '2') ? 'selected' : ''; ?>> 2</option>

                                                                        </optgroup>
                                                                    </select>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
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

            <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body">

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
        <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Mengisi otomatis field client_number dari session
    var clientNumber = "<?= session('client_number') ?>";
    document.getElementById("client_number").value = clientNumber;

    // Mengisi otomatis field nama_pemohon dan alamat_pemohon dari session (ganti sesuai dengan session yang sesuai)
    var namaPemohon = "<?= session('nama_pemohon') ?>";
    var nomorLaci = "<?= session('nomor_urut_laci') ?>";
    document.getElementById("nama_pemohon").value = namaPemohon;
    document.getElementById("nomor_urut_laci").value = nomorLaci;
  });
</script>
</body>

</html>