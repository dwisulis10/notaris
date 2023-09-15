<!DOCTYPE html>
<html>
<head>
    <title>Print Laporan Klien</title>
</head>
<body>
    <h1>Data Klien</h1>

    <table border="1">
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
                                        </tr>
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
