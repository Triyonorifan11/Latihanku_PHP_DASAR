<?php
$students = [
    ["Riyo", "20081010003", "Ilmu Komputer", "Informatika"],
    ["Riyono", "20081010004", "Ilmu Komputer", "Sains Data"],
    ["Hamdan", "20051010054", "Ilmu Hukum", "Hukum"]

];

$mahasiswa = [
    [
        "Nama" => "Riyo",
        "NPM" => "20081010003",
        "Fakultas" => "Ilmu Komputer",
        "Jurusan" => "Informatika"
    ],
    [
        "Nama" => "Riyono",
        "NPM" => "20081010004",
        "Fakultas" => "Ilmu Komputer",
        "Jurusan" => "Informatika"
    ],
    [
        "Nama" => "Hamdan",
        "NPM" => "20051010054",
        "Fakultas" => "Ilmu Hukum",
        "Jurusan" => "Hukum"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <h5>Dengan Array Numerik</h5>
        <?php foreach ($students as $student) : ?>
            <ul>

                <li>Nama : <?= $student[0]; ?></li>
                <li>NPM : <?= $student[1]; ?></li>
                <li>Fakultas : <?= $student[2]; ?></li>
                <li>Jurusan : <?= $student[3]; ?></li>

            </ul>
        <?php endforeach ?>
        <br>
        <hr>
        <br>

        <h5>Dengan Asosiatif Array</h5>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                <li>Nama: <?= $mhs["Nama"] ?></li>
                <li>NPM: <?= $mhs["NPM"] ?></li>
                <li>Fakultas: <?= $mhs["Fakultas"] ?></li>
                <li>Jurusan: <?= $mhs["Jurusan"] ?></li>
            </ul>
        <?php endforeach; ?>

    </div>

</body>

</html>