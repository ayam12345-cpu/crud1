<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>JURUSAN</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
     <div class="container">
          <marquee behavior="alternate">data member jomok48</marquee>

          <a href="tambah.php">TAMBAH DATA</a>
          <table class="table table-striped">
               <TR>
                    <th>NO</th>
                    <th>ID MEMBER</th>
                    <th>NAMA MEMBER</th>
                    <th>EMAIL</th>
                    <th>TGL_BERGABUNG</th>
                    <th>OPSI</th>
               </TR>
               <tr>
                    <?php
                    $dt_member = mysqli_query($koneksi, "SELECT * FROM tb_member_jmk");
                    $no = 1;
                    while ($member = mysqli_fetch_array($dt_member)) {
                    ?>
                         <td><?php echo $no++; ?></td>
                         <td><?php echo $member['id_member']; ?></td>
                         <td><?php echo $member['nama_member']; ?></td>
                         <td><?php echo $member['email']; ?></td>
                         <td><?php echo $member['tgl_bergabung']; ?></td>
                         <td>
                              <a href="edit.php?id=<?php echo $member['id_member']; ?>">edit</a>
                              <a href="hapus.php?id=<?php echo $member['id_member']; ?>">hapus</a>
                         </td>
               </tr>
          <?php
                    }
          ?>
          </table>
     </div>
     </div>
</body>

</html>