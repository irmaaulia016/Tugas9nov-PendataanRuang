<?php
include("koneksi.php");

if(!isset($_POST['edit'])){
    $kode = $_POST['id'];
    $nama =$_POST['nama'];
    $jenis =$_POST['jenis'];
    $kondisi =$_POST['kondisi'];

    $sql = "UPDATE tb_pendataan SET nama='$nama' , jenis='$jenis' , kondisi='$kondisi' WHERE id=$kode";
    $query = mysqli_query($koneksi,$sql);
    
    if($query){
        header( 'Location:tampil.php');
    }else{
        die ("gagal mengedit");
    }

}
?>