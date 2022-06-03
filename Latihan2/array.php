<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Array</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: #adffaf;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Array</h1>
        <?php
        $hari = array("Senin", "Selasa", "Rabu");
        $bulan = ["Januari", "Februari"];
        $arr = [123, "Oke"];

        // echo var_dump($hari);
        // echo "<br>";
        // echo print_r($bulan);
        // echo "<br>";
        // echo $arr[1];

        echo var_dump($hari);
        $hari[] = "Kamis";
        echo "<br>";
        echo var_dump($hari);

        ?>

        <hr>
        <h1>Pengulangan pada array</h1>
        <?php
        $angka = [1, 4, 3, 2, 5, 3, 22, 9, 6, 3, 2, 1];

        ?>

        <h2>Dengan For</h2>
        <?php for ($i = 0; $i < count($angka); $i++) : ?>
            <div class="box"><?= $angka[$i] ?></div>
        <?php endfor ?>
        <div class="clear"></div>
        <hr>
        <br><br>


        <h3>Dengan Foreach</h3>
        <?php foreach ($angka as $numb) : ?>
            <div class="box"><?= $numb ?></div>
        <?php endforeach; ?>

        <div class="clear"></div>
        <hr>
        <br><br>


    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>