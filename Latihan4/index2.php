<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_phpdasar");

// ambil data dari tabel menu
$result = mysqli_query($conn, "SELECT * FROM tb_menuresto");

// ambil data dari tb_menu resto dari result
// 1 mysqli_fetch_row() => mengembalikan array numerik
// 2 mysqli_fetch_assoc() => mengambalikan array associative
// 3 mysqli_fetch_array() => mengembalikan keduanya diatas
// 4 mysqli_fetch_object() =>


// while ($show_row = mysqli_fetch_assoc($result)) {
//     var_dump($show_row);
// }

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
        <div class="row py-5">
            <div class="my-4 d-flex justify-content-center bg-secondary text-light">
                <h3>Daftar Menu Pixel</h3>
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
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
                                    <a href="" class="btn btn-sm btn-secondary my-2">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endwhile; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>