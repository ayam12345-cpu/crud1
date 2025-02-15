<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HEWAN</title>
</head>

<body>
     <marquee behavior="alternate">data hewan </marquee>

     <a href="tambah.php">TAMBAH DATA</a>
     <table border="1px">
          <TR>
               <TH>NO</TH>
               <TH>ID HEWAN</TH>
               <TH>NAMA HEWAN</TH>
               <TH>HABITAT</TH>
               <TH>OPSI</TH>
          </TR>
          <tr>
               <?php
               $dt_hewan = mysqli_query($koneksi, "SELECT * FROM tb_hewan");
               $no = 1;
               while ($hewan = mysqli_fetch_array($dt_hewan)) {
               ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hewan['id_hewan']; ?></td>
                    <td><?php echo $hewan['nama_hewan']; ?></td>
                    <td><?php echo $hewan['habitat']; ?></td>
                    <td>
                         <a href="edit.php?id=<?php echo $hewan['id_hewan']; ?>">edit</a>
                         <a href="hapus.php?id=<?php echo $hewan['id_hewan']; ?>">hapus</a>
                    </td>
          </tr>
     <?php
               }
     ?>
     </table>
     </div>
</body>

</html>