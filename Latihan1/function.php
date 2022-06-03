<?php
function salam($waktu = "datang", $nama = "admin")
{
    return "Selamat " . $waktu . " " . $nama . " :)";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Funtion in PHP</title>
</head>

<body>
    <h1>Funtion in PHP</h1>
    <!-- menampilkan tanggal format tertentu -->
    <!-- https://www.php.net/manual/en/function.date.php -->
    <h2>Bulid-in Function</h2>
    <h3><?php echo date("l, d-F-Y"); ?></h3>

    <!-- https://www.php.net/manual/en/function.time -->
    <h3><?php echo "Now: " . date("l, d-F-Y") ?></h3>
    <h3><?php echo "Next Week: " . date("l, d-F-Y", time() + (40 * 24 * 60 * 60)) ?></h3>
    <div class="my-5">
        <h3><?php echo date("l, d F Y", mktime(0, 0, 0, 9, 11, 2001)) ?></h3>
        <h3><?= date("l, d M Y", strtotime("11 sep 2001")) ?></h3>
    </div>
    <hr>
    <div class="my-5">
        <h2>User-Defined function</h2>
        <h3><?= salam() ?></h3>
        <h3><?= salam("Pagi", "Riyo") ?></h3>
    </div>

</body>

</html>