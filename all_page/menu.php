<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <form action="" method="post">
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Tambah Data Anak</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ID Anak</label>
                            <input type="text" name="id_menu" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" name="nama_menu" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jenis Vaksin</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">--Pilih Vaksin--</option>
                                <option value="DPT">DPT</option>
                                <option value="BCG">BCG</option>
                                <option value="CAMPAK">CAMPAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Umur Anak</label>
                            <input type="number" name="stok" class="form-control">
                        </div>    

                        <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="number" name="harga" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <nav class="navtop">
        <div>
        <h1>POSYANDU KECAMATAN MANDAU</h1>
            <a href="../index.php"><i class="fas fa-home"></i>Home</a>
            <a href="#"><i class="fas fa-baby"></i>Data Anak</a>
            <a href="report.php" target="blank"><i class="fas fa-download"></i>Unduh Data</a>
        </div>
    </nav>
    <div class="container"><br><br>
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <td class="td-actions"><a data-toggle="modal" data-target="#tambah" class="btn btn-info">Tambah Data</a></td>
            <!-- Awal Card Tabel -->
            <div class="card mt-3">
                <div class="card-header bg-success text-white">
                    <h3>Daftar Nama Anak Posyandu Kecamatan Mandau</h3>
                </div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>ID Anak</th>
                                <th>Jenis Vaksin</th>
                                <th>Nama Anak</th>
                                <th>Umur Anak (bulan)</th>
                                <th>Berat Badan (kg)</th>
                                <th>Metode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_menu ORDER BY id_menu ASC";
                            $cek = mysqli_query($koneksi, $sql);
                            $no = 1;
                            while ($data = mysqli_fetch_array($cek)) {

                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['id_menu'] ?></td>
                                    <td><?= $data['kategori'] ?></td>
                                    <td><?= $data['nama_menu'] ?></td>
                                    <td><?= $data['stok'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td>
                                        <a href="menu_edit.php?id=<?= $data['id_menu'] ?>" class="btn btn-warning"> Edit </a>
                                        <a href="menu.php?page=hapus&id=<?= $data['id_menu'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- Akhir Card Tabel -->
        </div>
    </div>
    <!-- for Modal -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
<!-- Tambah Data -->
<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id_menu'];
    $kategori = $_POST['kategori'];
    $nama_menu = $_POST['nama_menu'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO tbl_menu (id_menu,kategori,nama_menu,stok,harga) 
    VALUES ('$id','$kategori','$nama_menu','$stok','$harga')";

    if (mysqli_query($koneksi, $query)) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Berhasil Ditambahkan'); 
	window.location.href='menu.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data Gagal Ditambahkan');
	window.location.href='menu.php'</script>";
    }
}


//Pengujian jika Hapus di klik
if (isset($_GET['page'])) {
    if ($_GET['page'] == "hapus") {
        $hapus = mysqli_query($koneksi, "DELETE FROM tbl_menu WHERE id_menu = '$_GET[id]' ");
        if ($hapus) {
            echo "<script>
                    alert('Hapus Data Suksess!!');
                    document.location='menu.php';
                 </script>";
        } else {
            // pesan apabila hapus gagal
            echo "<script>alert('Data gagal dihapus, cek data Transaksi'); window.location.href='menu.php'</script>";
        }
    }
}
?>