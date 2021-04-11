<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INSERT</title>
</head>
<body>
    <a href="index.php">KEMBALI</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id_employe">ID_EMPLOYE</label>
                <input type="text" name="id_employe" id="id_employe">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama">
                <label for="id_department">ID_DEPARTMENT</label>
                <input type="text" name="id_department" id="id_department">
            </li>
            <button type="submit" name="insert">INSERT</button>
</body>
</html>