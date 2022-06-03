<?php

require "functions.php";

?>

<?php if (isset($_POST["register"])) : ?>

    <?php if (register($_POST) > 0) : ?>
        <script>
            alert('data berhasil ditambahkan');
            // document.location.href = 'index.php';
        </script>
    <?php else : ?>
        <script>
            <?php mysqli_error($conn) ?>
            // document.location.href = 'index.php';
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

    <title>Registrasi</title>
</head>

<body>
    <section class="registrasi">
        <div class="container ">
            <div class="row col-12 ">
                <form action="" method="POST">
                    <div class="col-12 my-4 d-flex justify-content-center">
                        <div class="card col-6">
                            <h5 class="card-header bg-primary text-light text-center">Registrasi</h5>
                            <div class="card-body">
                                <div class="mb-3 col-12">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Masukkan email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="pixel@gmail.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmpassword" class="form-label">Confirmasi password</label>
                                        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="my-3">
                                        <div class="d-flex justify-content-center">
                                            <!-- <button type="submit" name="close" class="me-2 btn btn-outline-secondary" onclick="document.location.href='index.php';">Cancel</button> -->
                                            <button type="submit" name="register" class="btn btn-sm btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-5">
                                        <div class="d-grid justify-content-center">
                                            <p>Sudah punya akun?</p>
                                            <button type="submit" name="register" class="btn btn-sm btn-outline-primary" onclick="document.location.href='login.php';">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>