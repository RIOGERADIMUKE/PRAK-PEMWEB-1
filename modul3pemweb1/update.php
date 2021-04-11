<?php
require("function.php");
$id_employe = $_GET["update"];
$data = show("SELECT * FROM employee WHERE id_employe = $id_employe");
if (isset($_POST["ubah"])) {
    if (update($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
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
    <title>Update</title>
</head>
<body>
    <a href="index.php">KEMBALI</a>
    <form action="" method="POST">
        <?php
        foreach ($data as $d) {
        ?>
            <ul>
                <li>
                    <label for="id_employe">ID_EMPLOYE</label>
                    <input type="text" name="id_employe" id="id_employe" value=<?php echo $d["id_employe"]; ?> readonly>
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" id="nama" value=<?php echo $d["nama"]; ?>>
                    <label for="id_department">ID_DEPARTMENT</label>
                    <input type="text" name="id_department" id="id_department" value=<?php echo $d["id_department"]; ?>>
                    </ul>
                    <button type="submit" name="ubah">UPDATE</button>
            
        <?php
        }
        ?>
</body>
</html>