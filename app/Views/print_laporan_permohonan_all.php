<!DOCTYPE html>
<html>
<head>
    <title>Print Laporan Permohonan</title>
</head>
<body>
    <h1>Data Permohonan</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemohon</th>
                <th>Alamat</th>
                <th>Tujuan</th>
                <th>Tanggal Permohonan</th>
                <th>Jenis Akta</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($permohonanData as $permohonan) : ?>
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
