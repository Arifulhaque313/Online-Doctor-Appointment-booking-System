<?php

session_start();
include "../includes/db.php";


if(isset($_POST['update'])){


    $password = mysqli_real_escape_string($link,$_POST['password']);
    $cpassword = mysqli_real_escape_string($link,$_POST['cpassword']);

    $id = $_SESSION['id'];
  


    $pass = password_hash ($password, PASSWORD_BCRYPT);
    $cpass = password_hash ($cpassword, PASSWORD_BCRYPT);

    if(strlen ($password) < 7){
        ?>
        <script>
        alert("Password should be more than 7")
        window.location.href = "../database/check_forget_email.php";
        </script>
        <?php  
  
        }
  
    elseif($password != $cpassword){
        ?>
        <script>
        alert("Password are not matching")
        window.location.href = "../database/check_forget_email.php";
        </script>
        <?php  
  
      }
  
    
      else{
        $query="update testusers set password='$pass', cpassword='$cpass' where id=$id";
      mysqli_query($link,$query);


      
      }
    

}

?>



<script>
        alert("New password updated")
        window.location.href = "../login/login.php";
        </script>