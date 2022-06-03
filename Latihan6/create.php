<?php

require "functions.php";

?>

<?php if (isset($_POST["submit"])) : ?>
    <?php if (create($_POST) > 0) : ?>
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    <?php else : ?>
        <script>
            alert('data Errorr !!');
            document.location.href = 'index.php';
        </script>
    <?php endif ?>
<?php endif ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Menu</title>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="container py-5">
        <?php if (isset($_POST["submit"])) : ?>
            <?php if (create($_POST) > 0) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <strong>Success!</strong> Berhasil menambah data. Klik Close.
                    <button type="submit" class="btn-close" name="close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <!-- <a href="" name="close" class="btn-close"></a> -->
                </div>
            <?php endif ?>
        <?php endif ?>
        <form action="" method="POST">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    <h5 class="card-title">Tambah Data</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="menu" class="col-sm-2 col-form-label"> 1. Nama Menu</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="nama" class="form-control" id="menu" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">2. Deskripsi</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">3. Harga</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="harga" class="form-control" id="harga" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rate" class="col-sm-2 col-form-label">4. Rate</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="rate" class="form-control" id="rate" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">5. Gambar</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="gambar" class="form-control" id="gambar" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="pt-2 col-md-8 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-outline-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>