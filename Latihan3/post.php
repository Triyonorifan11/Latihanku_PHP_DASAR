<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Post in PHP</title>
</head>

<body>
    <div class="container">
        <h1>Post in PHP</h1>
        <?php if (isset($_POST["submit"])) : ?>
            <h1>Haloo kak, <?= $_POST["nama"]; ?></h1>
        <?php endif ?>
        <hr>
        <form action="" method="POST">
            <label for="">Masukkan Nama</label>
            <input type="text" name="nama" aria-placeholder="Masukkan nama"> <br>
            <button class="btn btn-sm btn-primary" type="submit" name="submit">Kirim</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>