<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;
        if($user>7){
            echo "USERNAME KURANG DARI 7 HURUF"."<br>";
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "PASSWORD HARUS ADA HURUF KAPITAL"."<br>";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "PASSWORD HARUS ADA HURUF KECIL"."<br>";
            $x = true;
        }

        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "PASSWORD HARUS MEMILIKI SPESIAL KARAKTER\n"."<br>";
            $x = true;
        }
        if (!preg_match("/[0-9]/", $password)) {
            echo "PASSWORD HARUS ADA ANGKA"."<br>";
            $x = true;
        }
        if($pass<10){
            echo "PASSWORD KURANG DARI 10 HURUF"."<br>";
            $x = true;
        } 
        if( $x == false ) {
            echo "BERHASIL LOGIN"."<br>";  
        }
    }
?>
