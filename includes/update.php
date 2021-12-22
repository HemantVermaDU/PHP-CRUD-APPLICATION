<?php include "../header.php"?>
<?php
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $user = $row['username'];
          $email = $row['email'];
          $pass = $row['password'];
        }

    if(isset($_POST['update'])) 
    {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $query = "UPDATE users SET username = '$user' , email = '$email' , password = '$pass' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
   <a href="home.php" class='btn btn-outline-dark mb-2'></i> View Users Details</a>
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Username</label>
        <input type="text" name="user" class="form-control" value="<?php echo $user  ?>">
      </div>

      <div class="form-group">
        <label for="email" >Email ID</label>
        <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
      <div class="form-group">
        <label for="pass" >Password</label>
        <input type="password" name="pass"  class="form-control" value="<?php echo $pass  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

