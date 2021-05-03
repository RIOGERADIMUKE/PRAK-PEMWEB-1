<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'merek_hp';
$koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($koneksi->connect_error) 
{
	die('Database Tidak Terhubung :'. $koneksi->connect_error);
} 
?>