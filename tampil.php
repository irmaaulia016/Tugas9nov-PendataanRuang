<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h3>PENDATAAN RUANG SMKN 1 SAYUNG</h3>

    <table border="1">
        <tr>
            <th>Nama Ruang </th>
            <th>Jenis Ruang </th>
            <th>Kondisi </th>
        </tr>
         
        <?php
        include("koneksi.php");
        $sql= "SELECT * FROM tb_pendataan";
        $query= mysqli_query($koneksi,$sql);

        while($pendataan=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>" .$pendataan['nama']."</td>";
            echo "<td>" .$pendataan['jenis']."</td>";
            echo "<td>" .$pendataan['kondisi']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$pendataan['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$pendataan['id']."'>Hapus</a> |";
            echo "</td>";
            echo "</tr>";



        }
        ?>
        </table>
    </body>
    </html>
