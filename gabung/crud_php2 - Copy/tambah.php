<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah data hewan</title>
</head>

<body>
     <h3>masukan data hewan</h3>
     <form action="tambah_proses.php" method="POST">
          <div>
               <label>NAMA HEWAN</label>
               <input type="text" name="nama_hewan">
          </div>
          <div>
               <label>HABITAT</label>
               <select name="habitat" class="form-select">
                    <option value="D">DARAT</option>
                    <option value="L">LAUT</option>
               </select>
          </div>
          <div>
               <input type="submit" value="simpan">
               <a href="index.php">kembali</a>
          </div>
     </form>

</body>

</html>