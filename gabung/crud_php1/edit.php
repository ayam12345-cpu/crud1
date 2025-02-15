<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <h3 class="text-center">form edit data</h3>
     <div class="container">
          <?php
          include "config.php";

          //menangkap data dari halaman index
          $id_member = $_GET['id'];
          $dt_member = mysqli_query($koneksi, "SELECT * FROM tb_member_jmk where id_member = $id_member");

          while ($member = mysqli_fetch_array($dt_member)) {
          ?>
               <form action="edit_proses.php" method="POST">
                    <div class="mb-3 row">
                         <label>NAMA MEMBER</label>
                         <div class="col-sm-4">
                              <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
                              <input class="form-control" type="text" name="nama_member" value="<?= $member['nama_member']; ?>">
                         </div>
                    </div>
                    <div>
                         <div class="mb-3 row">
                              <label>EMAIL</label>
                              <div class="col-sm-4">
                                   <input class="form-control" type="text" name="email" value="<?= $member['email'] ?>">
                              </div>
                         </div>
                         <div>
                              <div class="mb-3 row">
                                   <label>TANGGAL BERGABUNG</label>
                                   <div class="col-sm-4">
                                        <input class="form-control" type="date" name="tgl_bergabung" value="<?= $member['tgl_bergabung'] ?>">
                                   </div>
                              </div>
                              <div>
                                   <input type="submit" value="UPDATE">
                                   <a href="index.php">kembali</a>
                              </div>
               </form>
          <?php } ?>
     </div>
</body>

</html>