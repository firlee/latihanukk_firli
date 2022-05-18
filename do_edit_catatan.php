<?php 
session_start();
$nama = $_SESSION['nama'];
$no_hp = $_SESSION['no_hp'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$harga =$_POST['harga'];
$nama_barang =$_POST['nama_barang'];
$id_catatan=$_POST['id_catatan'];

$format = "\n$id_catatan|$nama|$no_hp|$tanggal|$jam|$harga|$nama_barang";

//buka file catatan.txt
$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; //mencati urutan baris ke berapa
    }
}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt',$data);
?>

<script type="text/javascript">
alert("Perubahan data catatan berhasil");
window.location.assign('user.php');
</script>