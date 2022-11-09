<?php
include ("koneksi.php");
if(isset($_POST['tambah'])) {
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$kondisi=$_POST['kondisi'];

 $sql= "INSERT INTO tb_pendataan (Nama,jenis,kondisi) VALUES ('$nama','$jenis','$kondisi')";
 $query=mysqli_query($koneksi,$sql);
    
    header("akses dilarang");
}
?>












 