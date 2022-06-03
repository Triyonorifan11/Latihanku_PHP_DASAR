<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];

require 'functions.php';

if (delete($id) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
        <script>
            alert('data Errorr !!');
            document.location.href = 'index.php';
        </script>
    ";
    echo mysqli_error($conn);
}
