<?php

sleep(1);

require '../functions.php';
$keysearch = $_GET["keysearch"];
$query = "SELECT * FROM tb_menuresto WHERE nama LIKE '%$keysearch%' OR 
                                        deskripsi LIKE '%$keysearch%' OR
                                        harga LIKE '%$keysearch%' OR
                                        rate LIKE '%$keysearch%' 
                                        ";
$menuresto = query($query);
?>

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