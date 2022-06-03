<?php
$menu = [
    [
        "Name" => "NasGor Spesial Pixel",
        "Desc" => "Nasi Goreng Spesial untuk anda yang sedang lelah :)",
        "Price" => "19000",
        "Img" => "NasiGoreng.PNG",
        "Rate" => "5",
    ],
    [
        "Name" => "Ayam Krispi Pixel",
        "Desc" => "Ayam Krispi untuk anda yang suka kriukk yess :)",
        "Price" => "11900",
        "Img" => "AyamKrispi.PNG",
        "Rate" => "4.5",
    ],
    [
        "Name" => "Bakso Pixel",
        "Desc" => "Bakso Pixel untuk anda yang suka dengan tantangan :)",
        "Price" => "13500",
        "Img" => "Bakso.PNG",
        "Rate" => "4.8",
    ],
    [
        "Name" => "Mi Kuah Pixel",
        "Desc" => "Mi Kuah Pixel untuk anda yang suka dengan Gurihh :)",
        "Price" => "14500",
        "Img" => "MiKuah.PNG",
        "Rate" => "4.8",
    ],
    [
        "Name" => "Nasi + Sate Spesial Pixel",
        "Desc" => "Nasi dan Sate Pixel untuk anda yang sedang menjalani hodup :)",
        "Price" => "19500",
        "Img" => "NasGorSpesial.PNG",
        "Rate" => "5",
    ],
    [
        "Name" => "Nasi + Ayam Skooll Pixel",
        "Desc" => "Paket Pixel untuk anda yang suka menunggu yang pasti :)",
        "Price" => "16500",
        "Img" => "NasiAyamKrispi.PNG",
        "Rate" => "4.4",
    ],
    [
        "Name" => "Sate Reng Madura Pixel",
        "Desc" => "Sate untuk anda yang suka dengan orang Madura :)",
        "Price" => "21500",
        "Img" => "SateMadura.PNG",
        "Rate" => "4.8",
    ],
    [
        "Name" => "Seafood Kepiting Pixel ",
        "Desc" => "Seafood Kepiting Pixel untuk anda yang suka dengan Laut :)",
        "Price" => "34500",
        "Img" => "Seafood.PNG",
        "Rate" => "4.7",
    ],
    [
        "Name" => "Telur Bali Pixel",
        "Desc" => "Telur Bali Pixel untuk anda yang suka rindu di Bali :)",
        "Price" => "24500",
        "Img" => "TelurBali.PNG",
        "Rate" => "4.9",
    ],
    [
        "Name" => "Tumpeng Spesial Pixel ",
        "Desc" => "Paket Pixel untuk anda yang suka dengan Kebersamaan :)",
        "Price" => "84500",
        "Img" => "Tumpeng.PNG",
        "Rate" => "4.5",
    ],
];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Menu RestoPixel - Latihan Array</title>
</head>

<body>
    <section class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <h5 class="col-sm-12 text-light">Resto Pixel</h5>
                </div>
            </div>
        </nav>
    </section>

    <div class="container" style="padding-top: 5rem;">
        <div class="d-flex justify-content-center align-items-center">
            <h1>Menu RestoPixel - Latihan Array</h1>
        </div>
        <hr>
    </div>
    <section class="col-12 py-3">
        <div class="container">
            <div class="row ">
                <?php foreach ($menu as $food) : ?>
                    <div class="col-lg-3 col-md-6 mb-5 d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="images/<?= $food["Img"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-warning d-flex justify-content-end"><i class="bi bi-star-fill"></i> <?= $food["Rate"] ?> </p>
                                <h5 class="card-title"> <?= $food["Name"] ?></h5>
                                <p class="card-text"> <?= $food["Desc"] ?></p>
                                <p class="card-text fw-bold text-success">Rp<?= $food["Price"] ?></p>
                                <a href="#" class="btn btn-sm btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>