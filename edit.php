<?php
include("koneksi.php");
if (!isset($_GET['id'])){
    header("Location:tampil.php?");
 }
 $kode = $_GET['id'];
 $sql = "SELECT * FROM tb_pendataan WHERE id=$kode";
 $query = mysqli_query($koneksi,$sql);
 $pendataan = mysqli_fetch_assoc($query);

 if(mysqli_num_rows($query) < 1){
     die ("Data Tidak Ditemukan");
 }
?>

<html>
    <head>
    </head>
  <body> 
      <h3>APLIKASI PENDATAAN RUANG SMKN 1 SAYUNG<h3>
        <form action="proses-edit.php" method="POST">
          <fieldset>
              <input type="hidden" name="id" value=" <?php echo $pendataan['id'] ?>" />
            <p>
              <label for="nama"> Nama Ruang : </label>
              <input type="text" name="nama" value=<?php echo $pendataan['nama']?> />
            </p>

            <p>
              <label for="jenis"> Jenis Ruang : </label>
              <select name="jenis" value=<?php echo $pendataan['jenis']?> >
                <option value="laboratorium">Laboratorium</option>
                <option value="kantin">Kantin</option>
                <option value="ruangkelas">Ruang kelas</option>
                <option value="musola">Musola</option>
                <option value="aula">Aula</option>
            </select>

            <p>
              <label for="kondisi"> Kondisi : </label>
              <input type="text" name="kondisi" value=<?php echo $pendataan['kondisi']?> />
            </p>

            <p>
               <input type="submit" value="Tambah" name="tambah">
            </p>
</fieldset>
</form>
</body>
</html>

