<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>edit</title>
</head>

<body>
     <h3 class="text-center">form edit data</h3>
     <div class="container">
          <?php
          include "config.php";

          //menangkap data dari halaman index 
          $id_hewan = $_GET['id'];
          $dt_hewan = mysqli_query($koneksi, "SELECT *FROM tb_hewan where id_hewan = $id_hewan");

          while ($hewan = mysqli_fetch_array($dt_hewan)) {
          ?>
               <form action="edit_proses.php" method="POST">
                    <div class="mb-3 row">
                         <label>NAMA HEWAN</label>
                         <div class="mb-3 row">
                              <input type="hidden" name="id_hewan" value="<?= $hewan['id_hewan'] ?>">
                              <input class="form-control" type="text" name="nama_hewan" value="<?= $hewan['nama_hewan'] ?>">
                         </div>
                         <label>HABITAT</label>
                         <select name="habitat">
                              <option <?php if ($hewan['habitat'] == "D") {
                                             echo "selected='selected'";
                                        } ?> value="D">DARAT</option>
                              <option <?php if ($hewan['habitat'] == "L") {
                                             echo "selected='selected'";
                                        } ?> value="L">LAUT</option>
                         </select>
                         <div>
                         </div>
                         <input type="submit" value="UPDATE">
                         <a href="index.php">KEMBALI</a>
               </form>
          <?php } ?>
     </div>
</body>

</html>