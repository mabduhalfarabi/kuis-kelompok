<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>

<body>
    <div class="card mt-3">
        <div class="card-header bg-success text-white">
            <center>
                <h3>DATA ANAK</h3>
            </center>
        </div>

        <div class="card-body">

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>ID Anak</th>
                                <th>Jenis Vaksin</th>
                                <th>Nama Anak</th>
                                <th>Umur Anak (bulan)</th>
                                <th>Berat Badan (kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tbl_menu ORDER BY id_menu ASC");
                    while ($d = mysqli_fetch_array(($data))) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $d['id_menu']; ?></td>
                            <td><?php echo $d['kategori']; ?></td>
                            <td><?php echo $d['nama_menu']; ?></td>
                            <td><?php echo $d['stok']; ?></td>
                            <td><?php echo $d['harga']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>
    <br><br>
    <center><button onclick="window.print()">Print</button></center>
    <script>
        window.print();
    </script>
</body>

</html>