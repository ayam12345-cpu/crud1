<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>To-Do List</title>
</head>

<body>
     <div class="container">
          <h1>To-Do List</h1>
          <form action="add.php" method="POST">
               <input type="text" name="title" placeholder="tambahkan tugas" required>
               <button type="submit">tambah</button>
          </form>
          <table>
               <thead>
                    <tr>
                         <th>No</th>
                         <th>Tugas</th>
                         <th>opsi</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $sql = "SELECT * FROM tasks ORDER BY created_at DESC";
                    $result = $conn->query($sql);
                    $no = 1;

                    while ($row = $result->fetch_assoc()) {
                         echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['title']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}'>Edit</a> |
                                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Hapus</a>
                            </td>
                          </tr>";
                         $no++;
                    }
                    ?>
               </tbody>
          </table>
     </div>
</body>

</html>