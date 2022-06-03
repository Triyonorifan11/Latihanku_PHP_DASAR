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

    // updload gambar
    $gambar = upload();

    if (!$gambar) {
        return false;
    }

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


function upload()
{
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $temp = $_FILES['gambar']['tmp_name'];

    // cek gambar 
    if ($error === 4) {
        echo "<script>
                alert('silahkan upload gambar terlebih dahulu !!');
            </script>";
        return false;
    }

    // cek ekstensi file
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $fileName);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('tipe ekstensi salah, harus .jpg , .png , .jpeg !!');
            </script>";
        return false;
    }

    // cek ukuran gambar
    if ($fileSize > 2000000) {
        echo "<script>
                 alert('Size file terlalu besar !!');
              </script>";
        return false;
    }

    // jika tidak false
    // generate nama file
    $newfileName = uniqid();
    $newfileName .= '.';
    $newfileName .= $ekstensiGambar;

    move_uploaded_file($temp, 'images/' . $newfileName);
    return $newfileName;
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
    $oldgambar = htmlspecialchars($data["oldgambar"]);

    // cek user pilih gambar baru atau tidak
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $oldgambar;
    } else {
        $gambar = upload();
    }


    // 
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


function search($keyword)
{
    $query = "SELECT * FROM tb_menuresto WHERE nama LIKE '%$keyword%' OR 
                                        deskripsi LIKE '%$keyword%' OR
                                        harga LIKE '%$keyword%' OR
                                        rate LIKE '%$keyword%' 
                                        ";

    return query($query);
}


function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $data["confirmpassword"]);

    // cek username
    $result = mysqli_query($conn, "SELECT username FROM tb_users WHERE username = '$username' OR email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                  alert('Username atau email sudah ada !!');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $confirm_password) {
        echo "<script>
                 alert('Password tidak sesuai');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru ke db_users
    $insert = "INSERT INTO tb_users VALUES ('','$username', '$password', '$email')";
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}
