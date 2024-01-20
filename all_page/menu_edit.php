<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>Posyandu Kecamatan Mandau</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="menu.php"><i class="fas fa-baby"></i>Data Anak</a>
            <a href="report.php" target="blank"><i class="fas fa-download"></i>Unduh Data</a>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <center>
            <font size="6">Edit Data</font>
        </center>

        <hr>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // ambil data berdasarkan id_transaksi		 
            $stid = mysqli_query($koneksi, "SELECT * FROM tbl_menu WHERE id_menu = '$id'");

            while ($d = mysqli_fetch_array($stid)) {
        ?>

                <form action="" method="post">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">ID Menu</label>
                        <div class="col-md-6 col-sm-6">
                            <input readonly type="text" name="id_menu" class="form-control" value="<?= $d['id_menu'] ?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Vaksin</label>
                        <div class="col-md-6 col-sm-6">
                            <select name="kategori" class="form-control" value="<?= $d['kategori'] ?>">
                                <option value="">--Pilih Vaksin--</option>
                                <option value="DPT">DPT</option>
                                <option value="BCG">BCG</option>
                                <option value="CAMPAK">CAMPAK</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Anak </label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="nama_menu" class="form-control" value="<?= $d['nama_menu'] ?>">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Umur (bulan)</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="stok" class="form-control" value="<?= $d['stok'] ?>">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Berat Badan</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="harga" class="form-control" value="<?= $d['harga'] ?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                            <a href="menu.php" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                </form>
        <?php }
        }  ?>
    </div>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    $id = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];


    // update data berdasarkan id_barang yg dikirimkan

    $query = "UPDATE tbl_menu SET kategori='$kategori', nama_menu='$nama_menu', stok='$stok', 
    harga='$harga' WHERE id_menu='$id'";

if (mysqli_query($koneksi, $query)) {
    // pesan jika data berubah
    echo "<script>alert('Data Berhasil Diubah'); window.location.href='menu.php'</script>";
} else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Gagal diubah :('); window.location.href='menu.php'</script>";
}
}


