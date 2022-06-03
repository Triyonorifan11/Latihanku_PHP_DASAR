<?php
// Read Data dari Database
// Latihan 5 = Create and Delete
// koneksi database
require "functions.php";
$menuresto = query("SELECT * FROM tb_menuresto");

if (isset($_POST["search"])) {
    $menuresto = search($_POST["keysearch"]);
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

    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="row py-3">
            <div class="my-2 d-flex justify-content-center bg-secondary text-light">
                <h3>Daftar Menu Pixel</h3>
            </div>
            <div class="my-4 col-md-12 d-md-flex ">
                <a href="create.php" class="btn btn-primary me-auto mb-2 mb-lg-0">Tambah Data</a>
                <form action="" method="POST" class="d-flex col-lg-3 col-md-6 col-sm-12">
                    <input class="form-control me-2" type="text" name="keysearch" placeholder="Cari data menu.." size="10" autofocus aria-label="Search" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit" name="search" type="submit">Search</button>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" style="vertical-align: middle;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menuresto as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td>
                                    <img src="images/<?= $row["gambar"]; ?>" alt="" width="120px" style="border-radius: 5px;">
                                </td>
                                <td><?= $row["nama"]; ?></td>
                                <td>Rp <?= $row["harga"]; ?>,-</td>
                                <td><?= $row["deskripsi"]; ?></td>
                                <td><?= $row["rate"]; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row["id"] ?>" class=" btn btn-sm btn-secondary my-2">Edit</a>
                                    <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Menaghapus data ini?');">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>