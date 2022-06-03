<?php
$conn = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function create($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $rate = htmlspecialchars($data["rate"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $insert = "INSERT INTO tb_menuresto VALUES ('', '$nama', '$deskripsi', '$harga', '$rate', '$gambar')";
    mysqli_query($conn, $insert);

    // cek berhasil tambah atau tidak
    if (mysqli_affected_rows($conn) > 0) {
        echo "Success!";
    } else {
        echo "Erorr";
        echo mysqli_error($conn);
    }


    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_menuresto WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $rate = htmlspecialchars($data["rate"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $update = "UPDATE tb_menuresto SET 
                nama = '$nama',
                deskripsi = '$deskripsi',
                harga = '$harga',
                rate = '$rate',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $update);

    // cek berhasil tambah atau tidak
    if (mysqli_affected_rows($conn) > 0) {
        echo "Success!";
    } else {
        echo "Erorr";
        echo mysqli_error($conn);
    }


    return mysqli_affected_rows($conn);
}
