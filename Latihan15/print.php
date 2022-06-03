<?php

require_once __DIR__ . '/vendor/autoload.php';

require "functions.php";
$menuresto = query("SELECT * FROM tb_menuresto");

$mpdf = new \Mpdf\Mpdf();
$htmlprint = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<h3>Daftar Menu Pixel</h3>
<table border="1" cellpadding = "10" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Rate</th>
        </tr>
    </thead>
    <tbody>';
$i = 1;
foreach ($menuresto as $row) {
    $htmlprint .= '
        <tr>
            <td>' . $i++ . '</td>
            <td>
                <img src="images/' . $row["gambar"] . '" width="120px" style ="border-radius: 5px;">
            </td>
            <td>' . $row["nama"] . '</td>
            <td>Rp ' . $row["harga"] . ',-</td>
            <td>' . $row["deskripsi"] . '</td>
            <td>' . $row["rate"] . '</td>
        </tr>';
}
$htmlprint .= '
    </tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($htmlprint);
$mpdf->Output('daftarmenuPixel.pdf', \Mpdf\Output\Destination::INLINE);
