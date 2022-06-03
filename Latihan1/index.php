<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Latihan 1</title>
</head>

<body>
    <div class="container my-5 d-flex justify-content-center">
        <div class="row col-12">
            <div class="col-12">
                <h5>Bukan templating</h5>
                <table class="table table-bordered col-9">
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= 5; $j++) {
                            echo "<td>$i, $j</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <div class="col-12">
                <h5>Dengan templating</h5>
                <table class="table table-bordered col-9">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <tr>
                            <?php for ($j = 1; $j <= 5; $j++) : ?>
                                <td><?= "$i,$j" ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>
                </table>
            </div>

            <div class="col-12">
                <h5>Dengan templating + for-if (percabangan)</h5>
                <table class="table table-bordered col-9">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <?php if ($i % 2 == 1) : ?>
                            <tr class="bg-secondary text-light">
                            <?php else : ?>
                            <tr>
                            <?php endif; ?>
                            <?php for ($j = 1; $j <= 5; $j++) : ?>
                                <td><?= "$i,$j" ?></td>
                            <?php endfor ?>
                            </tr>
                        <?php endfor ?>
                </table>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>