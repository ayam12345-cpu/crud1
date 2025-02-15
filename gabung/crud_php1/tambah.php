<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah data member</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
     <div class="container">
          <h3>masukan data member</h3>
          <form action="tambah_proses.php" method="POST">
               <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"> NAMA MEMBER </label>
                    <div class="col-sm-4">
                         <input type="text" name="nama_member">
                    </div>
               </div>
               <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"> EMAIL</label>
                    <div class="col-sm-4">
                         <input type="text" name="email">
                    </div>
               </div>
               <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"> TANGGAL BERGABUNG </label>
                    <div class="col-sm-4">
                         <input type="date" name="tgl_bergabung">
                    </div>
               </div>
               <div>
                    <input type="submit" value="simpan">
                    <a href="index.php">kembali</a>
               </div>
          </form>
     </div>
</body>

</html>