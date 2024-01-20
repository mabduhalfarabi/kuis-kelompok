<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_pertemuan7");

if (mysqli_connect_errno()) {
    echo "Gagal melakukan Koneksi ke MySQL : " . mysqli_connect_error();
} elseif ($koneksi) {
}
