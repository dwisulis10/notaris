<!DOCTYPE html>
<html>

<head>
    <title>Print Laporan Arta</title>
</head>

<body>
    <h1>Data Akta</h1>

    <table border="1">
    <thead>

<tr>
    <th scope="col">No</th>
    <th scope="col">Nama Arsip</th>
    <th scope="col">Nama Klien</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Jenis Arsip</th>
    <th scope="col">Laci</th>
    <th scope="col">File PDF</th>
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
        <td><?= $row['nama_arsip']; ?></td>
        <td><?= $row['nama_pemohon']; ?></td>
        <td><?= $row['tanggal']; ?></td>
        <td><?= $row['jenis_arsip']; ?></td>
        <td><?= $row['nomor_urut_laci']; ?></td>
        <td><?= $row['file_pdf']; ?></td>
    </tr>
    <?php } ?>
                                </tbody>
                            </table>

    <!-- Script untuk melakukan aksi print saat halaman terbuka -->
    <script>
        // Melakukan aksi print saat halaman terbuka
        window.print();

        // Kembali ke halaman sebelumnya setelah mencetak
        window.onafterprint = function() {
            window.history.back();
        };
    </script>
</body>

</html>