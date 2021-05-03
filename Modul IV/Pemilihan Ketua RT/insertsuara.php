<?php
    include('connect.php');
    $id = $_POST['ID'];
    $nm = $_POST['NAMA'];
    $pil = $_POST['PILIHAN'];
    $tgl = $_POST['TANGGAL'];
    $query = mysqli_query($koneksi, "INSERT INTO suara VALUES ('$id','$nm','$tgl','$pil')");

    if ($query) {
        header('Location:index.php');
    }else {
        echo 'DATA BERHASIL DI MASUKAN';
    }
?>