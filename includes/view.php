
<?php  include '../header.php'?>

<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">Username</th>
          <th  scope="col">Email</th>
          <th  scope="col"> Password</th>
        </tr>  
      </thead>
        <tbody>
          <tr>     
            <?php
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 
                  $query="SELECT * FROM users WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $user = $row['username'];
                      $email = $row['email'];
                      $pass = $row['password'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$user}</td>";
                        echo " <td > {$email}</td>";
                        echo " <td >{$pass} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
