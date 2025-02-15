<?php
include 'db.php';

if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $sql = "SELECT * FROM tasks WHERE id = $id";
     $result = $conn->query($sql);
     $task = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $id = $_POST['id'];
     $title = $_POST['title'];
     $sql = "UPDATE tasks SET title = '$title' WHERE id = $id";

     if ($conn->query($sql) === TRUE) {
          header("Location: index.php");
     } else {
          echo "Error: " . $conn->error;
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Task</title>
</head>

<body>
     <form action="edit.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
          <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
          <button type="submit">Update</button>
     </form>
</body>

</html>