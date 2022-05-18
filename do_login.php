<?php 

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];

$format = "$nama|$no_hp";
$file = file('config.txt',FILE_IGNORE_NEW_LINES);

if(in_array($format, $file)){ // Jika data ditemukan
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['no_hp'] = $no_hp;

    header('location:user.php');

 
}else{ // jika data tidak ditemukan ?>
    <script type ="text/javascript">
        alert("!!! NAMA atau No Hp anda salah!");
        window.location.assign('index.php');
    </script> 
    <?php
}

