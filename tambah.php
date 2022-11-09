<html>
    <head>
    </head>
  <body> 
      <h3>APLIKASI PENDATAAN RUANG SMKN 1 SAYUNG<h3>
        <form action="proses.php" method="POST">
          <fieldset>
            <p>
              <label for="nama"> Nama Ruang : </label>
              <input type="text" name="nama" />
            </p>

            <p>
              <label for="jenis"> Jenis Ruang : </label>
              <select name="jenis">
                <option value="laboratorium">Laboratorium</option>
                <option value="kantin">Kantin</option>
                <option value="ruangkelas">Ruang kelas</option>
                <option value="musola">Musola</option>
                <option value="aula">Aula</option>
            </select>

            <p>
              <label for="kondisi"> Kondisi : </label>
              <input type="text" name="kondisi" />
            </p>

            <p>
               <input type="submit" value="Tambah" name="tambah">
            </p>
</fieldset>
</form>
</body>
</html>



