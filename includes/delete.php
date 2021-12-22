 <?php  include "../header.php" ?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];
         $query = "DELETE FROM users WHERE id = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         
           if (!$delete_query) {
              echo "something went wrong ". mysqli_error($conn);
          }
          else {
			  header("location:home.php");
              }  
     }	
              ?>
			  
    
