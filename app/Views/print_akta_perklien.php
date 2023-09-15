<!DOCTYPE html>
<html>

<head>
    <title>Print Laporan Akta Per Klien</title>
</head>

<body>
    <h1>Data Akta Per Klien</h1>

    <table border="1">
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