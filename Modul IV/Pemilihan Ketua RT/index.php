<?php
include('connect.php');

$qpemilih =  mysqli_query($koneksi, "SELECT ID , NAMA, TANGGAL FROM suara;");
$rpemilih = mysqli_fetch_all($qpemilih, MYSQLI_ASSOC);

$qsuara =  mysqli_query($koneksi, "SELECT PILIHAN ,COUNT(PILIHAN) AS 'JUMLAH', TANGGAL  FROM suara GROUP BY PILIHAN;");
$rsuara = mysqli_fetch_all($qsuara, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MODUL IV</title>
    <link rel="stylesheet" href="style.css">
    <script src="chart.js"></script>
</head>
<body>
    <div align="center">
<h1>PEMILIHAN KETUA RT</h1>

 
<form action="insertsuara.php" method="POST">

        <label>ID WARGA</label><br/>
        <input type="text" name="ID"/>
        <br/><br/>
        <label>NAMA PEMILIH</label><br/>
        <input type="text" name="NAMA"/>
        <br/><br/>
        <label>TANGGAL</label><br/>
        <input type="DATE" name="TANGGAL"/>
        <br/><br/>
        <br>
        <b>MEMILIH KETUA RT BARU</b><br></br>
        <label>1</label>
        <button type="submit" name="PILIHAN" value="JONO">JONO</button>
        <label>2</label>
        <button type="submit" name="PILIHAN" value="UDIN">UDIN</button>
        <label>3</label>
        <button type="submit" name="PILIHAN" value="TORIN">TORIN</button>
        <label>4</label>
        <button type="submit" name="PILIHAN" value="KASTO">KASTO</button>
        <br/><br/>
    </form>
    </div>
    </div>
    <br/><br/>
    <div align="center">
    <b>HASIL<b>
    <br><br>    
<div class="row">
  <div class="column">
    <table cellpadding="10" border="1">
        <thead>
            <th>CALON</th>
            <th >SUARA SEMENTARA</th>
        
        </thead>
        <tbody>
            <?php foreach ($rsuara as $vsuara) { ?>
                <tr>
                    <td align="center"><?=  $vsuara['PILIHAN'] ?></td>
                    <td align="center"><?=  $vsuara['JUMLAH']?></td>
                   
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br></br>
            </div>
            </div>
            

    <b>NAMA YANG SUDAH MEMILIH</b>
    <br><br>
    <div class="column">
   
    <table cellpadding="10" border="1">
        <thead>
            <th>ID</th>
            <th>NAMA YANG MEMILIH</th>
            <th>TANGGAL</th>
        </thead>
        <tbody>
            <?php foreach ($rpemilih as $vpemilih) { ?>
                <tr>
                    <td><?=  $vpemilih['ID'] ?></td>
                    <td><?=  $vpemilih['NAMA']?></td>
                    <td><?=  $vpemilih['TANGGAL']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br></br>
            </div>
 <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($rsuara as $vsuara) { echo "'".$vsuara['PILIHAN']."',"; } ?>],
        datasets: [{
        label: ' SUARA',
            data: [<?php foreach ($rsuara as $vsuara) {  echo "'".$vsuara['JUMLAH']."',";} ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive : false
    }
});
</script>
</body>
</html>

    
