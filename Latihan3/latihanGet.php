<?php
// cek data
if (!isset($_GET["img"]) || !isset($_GET["nama"]) || !isset($_GET["desc"]) || !isset($_GET["price"]) || !isset($_GET["rate"])) {
    header("Location: get.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container py-4">
        <ul>
            <img src="images/<?= $_GET["img"]; ?>" alt="">
            <li>Nama: <?= $_GET["nama"]; ?></li>
            <li>Desc: <?= $_GET["desc"]; ?></li>
            <li>Harga: <?= $_GET["price"] ?></li>
            <li>Rate: <?= $_GET["rate"]; ?></li>
        </ul>
        <a href="get.php">Back</a>
    </div>

</body>

</html>