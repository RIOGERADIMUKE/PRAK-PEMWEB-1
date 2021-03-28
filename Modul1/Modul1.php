<?php
            $names= ["rio", "geradi", "muke", "kevin","kejer"];
            function konsonan($kalimat) {
              $jumlah = strlen($kalimat);
              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $count = $jumlah - ($a+$i+$u+$e+$o);
  
              return $count;
          }
            function vokal($kalimat) {
              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
  
              $count = ($a+$i+$u+$e+$o);
  
              return $count;
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul1</title>
</head>
<body>
<h1 align="center"> NAMA : RIO GERADI MUKE </h1>
<h1 align="center"> NIM : 193030503051 </h1>
<h1 align="center"> KELAS : A </h1>
<h1 align="center"> PEMROGRAMAN WEB DAN MOBILE 1 </h1>
    <h1 align="center">======================================================</h1>

      <table border="1" cellpadding="10" cellspacing="1"align="center" width="1000">
            <tr>
              <th style="color: blue;">NAMA</th>
              <th style="color: blue;">KEBALIKAN NAMA</th>
              <th style="color: blue;">JUMLAH HURUF</th>
              <th style="color: blue;">JUMLAH KATA</th>
              <th style="color: blue;">VOKAL</th>
              <th style="color: blue;">KONSONAN</th>
            </tr>

           <?php foreach ($names as $name) :  ?>

                    <tr>
                        <td align="center"style="color: blue;"><?php echo $name."<br>"; ?></td>
                        <td align="center"><?php echo strrev($name)."<br>"; ?></td>
                        <td align="center"><?php echo strlen($name)."<br>"; ?></td>
                        <td align="center"><?php echo str_word_count($name)."<br>"; ?></td>
                        <td align="center"><?= vokal(  $name);  ?></td>
                        <td align="center"><?= konsonan( $name);  ?></td>
                    </tr>
            <?php endforeach; ?>

      </table>
      
</body>
</html>