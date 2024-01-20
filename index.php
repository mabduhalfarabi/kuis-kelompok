<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>POSYANDU KECAMATAN MANDAU</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
            <a href="./all_page/menu.php"><i class="fas fa-baby"></i>Data Anak</a>
            <a href="./all_page/report.php" target="blank"><i class="fas fa-download"></i>Unduh Data</a>
        </div>
    </nav>
    <div class="container">
        <div class="container-fluid">
            <h1>Welcome</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://media.discordapp.net/attachments/1028519473117941792/1198144359208587264/sedang_1614228801_posyandu.png?ex=65bdd5e3&is=65ab60e3&hm=6642199902b7b76b4a632e5abba8671be8342d7da2a28ee32add9ee529a3d347&=&format=webp&quality=lossless&width=668&height=508" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://cdn.discordapp.com/attachments/1028519473117941792/1198144083873501184/ini-kegiatan-posyandu-dan-manfaatnya-bagi-ibu-dan-anak.jpg?ex=65bdd5a2&is=65ab60a2&hm=85de0d71e2fb9be5027a420a13f3220724bdf99eac936522137d0dcc9d88a0b6&s" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://cdn.discordapp.com/attachments/1028519473117941792/1198143818353090560/gambar_bayi.webp?ex=65bdd562&is=65ab6062&hm=b48e18e42de8da6f829a9e2327ed195553dcb1d375435ca361cecb0fbab56a42&" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://cdn.discordapp.com/attachments/1028519473117941792/1198144779280711841/IMG-20231011-WA0072.jpg?ex=65bdd647&is=65ab6147&hm=7eefeca850f506ce08ab09e25492469343fc20aea78957bd775829521ea1aab9&" alt="fourth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>