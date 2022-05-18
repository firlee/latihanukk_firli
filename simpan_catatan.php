<?php 
session_start();
$nama = $_SESSION['nama'];
$no_hp = $_SESSION['no_hp'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$Harga =$_POST['harga'];
$nama_barang =$_POST['nama_barang'];

$format = "\n$nama|$no_hp|$tanggal|$jam|$harga|$nama_barang";

//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data catatan berhasil ditambahkan");
window.location.assign('user.php');
</script>