<!DOCTYPE html>
<html>

<head>
    <title>Print Laporan AKta</title>
</head>

<body>
    <h1>Data Akta</h1>

    <table border="1">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Klien</th>
                <th scope="col">Nomor Faktur</th>
                <th scope="col">Jenis Akta</th>
                <th scope="col">Nomor Akta</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nomor Urut(Laci)</th>
                <th scope="col">Total Biaya</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($akta as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_pemohon']; ?></td>
                    <td><?= $row['no_faktur']; ?></td>
                    <td><?= $row['jenis_akta']; ?></td>
                    <td><?= $row['nomor_akta']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['nomor_urut_laci']; ?></td>
                    <td><?= $row['total']; ?></td>
                </tr>
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