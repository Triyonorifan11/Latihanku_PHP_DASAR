<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

?>

<?php if (isset($_POST["update"])) : ?>
    <?php if (edit($_POST) > 0) : ?>
        <script>
            alert('data berhasil diedit');
            document.location.href = 'index.php';
        </script>
    <?php else : ?>
        <script>
            alert('data Errorr !!');
            document.location.href = 'index.php';
        </script>
    <?php endif ?>
<?php endif ?>

<?php
$id = $_GET["id"];
// query data dengan id
$editID = query("SELECT * FROM tb_menuresto WHERE id = $id")[0];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data Menu</title>
</head>

<body>
    <div class="container py-5">

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $editID["id"]; ?>">
            <input type="hidden" name="oldgambar" id="id" value="<?= $editID["gambar"]; ?>">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    <h5 class="card-title">Edit Data</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="menu" class="col-sm-2 col-form-label"> 1. Nama Menu</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="nama" class="form-control" id="menu" value="<?= $editID["nama"]; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">2. Deskripsi</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $editID["deskripsi"]; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">3. Harga</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $editID["harga"]; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rate" class="col-sm-2 col-form-label">4. Rate</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="rate" class="form-control" id="rate" value="<?= $editID["rate"]; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">5. Gambar</label>
                        <div class="col-sm-10 col-md-6 ">
                            <img src="images/<?= $editID["gambar"]; ?>" alt="" width="100px" class="mb-3">
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="pt-2 col-md-8 d-flex justify-content-end">
                            <button type="submit" name="close" class="me-2 btn btn-outline-secondary" onclick="document.location.href='index.php';">Cancel</button>
                            <button type="submit" name="update" class="btn btn-outline-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>