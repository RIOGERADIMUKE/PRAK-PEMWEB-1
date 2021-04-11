<?php
require("function.php");
$data = show("SELECT * FROM employee");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modul 3</title>
</head>

<body>

    <form align="center" action="insert.php">
    <h1> PEMROGRAMAN WEB DAN MOBILE 1 <h1>
        <button> <h3>INSERT<h3></button>
        <h4> <h4>
        <table  align="center" border="1" cellpadding="20" cellspacing="5">
        <tr>
            <td>ID_EMPLOYE</td>
            <td>NAMA</td>
            <td>ID_DEPARTMENT</td>
            <td>PILIHAN</td>
        </tr>
    </form>
        <?php
        foreach ($data as $d) {
        ?>
            <tr>
                <td><?php echo $d["id_employe"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["id_department"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $d["id_employe"]; ?>><h3>DELETE<h3></button>
                    </form>
                    <form action="update.php" method="GET">
                        <button type="submit" name="update" value=<?php echo $d["id_employe"]; ?>><h3>UPDATE<h3></button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>