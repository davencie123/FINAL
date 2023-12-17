<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>
<body>

<?php
include 'database.php';
?>
    <nav>
        <a href="davencie2.php">About Me</a>
        <a href="logout.php">Logout</a>
    </nav>
    <section>
        <h2>Welcome Admin</h2>
        <div class="container">
    <button class="btn btn-primary my-5"><a href="add.php" class="text-light"> Add user</a>
    
  </button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $fullname = $row['full_name'];
        $username = $row['username'];
        $password = $row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$fullname.'</td>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
      }
    }
  ?>
  </tbody>
</table>
  </div>
    </section>

    <footer>
        <p>&copy; 2023 Admin Panel. All rights reserved.</p>
    </footer>

</body>
</html>
