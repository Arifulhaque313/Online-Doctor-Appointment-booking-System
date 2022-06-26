<?php

  session_start();  

  include "../includes/db.php";



  $id = $_SESSION['id'];
  if(isset($_POST['submit'])){

    $oldpassword = mysqli_real_escape_string($link,$_POST['oldpassword']);
    $npassword = mysqli_real_escape_string($link,$_POST['npassword']);
    $cnpassword = mysqli_real_escape_string($link,$_POST['cnpassword']);
    

  
   
     
   

    $pass = password_hash ($npassword, PASSWORD_BCRYPT);
    $cpass = password_hash ($cnpassword, PASSWORD_BCRYPT);


    $email_query = "select * from testusers where id = '$id'";
    $email_result = mysqli_query($link,$email_query);
    $email_count = mysqli_num_rows($email_result);


    if($email_count){
        $row = mysqli_fetch_assoc($email_result);

        $db_pass = $row['password'];
        $pass_decode = password_verify($oldpassword, $db_pass);

        if($pass_decode){
           
            if(strlen ($npassword) < 7){
                ?>
                <script>
                  alert("Password should be more than 7")
                  window.location.href="../dashboards/change_password.php";
                </script>
                <?php  
          
              }
          
              elseif($npassword != $cnpassword){
                ?>
                <script>
                  alert("Password are not matching")
                  window.location.href="../dashboards/change_password.php";
                </script>
                <?php  
          
              }
          
            
              else{
                $query="update testusers set password='$pass', cpassword='$cpass' where id=$id";
              mysqli_query($link,$query);
              
              }
        }

        else{
            ?>
                <script>
                  alert("old password are not matching")
                  window.location.href="../dashboards/change_password.php";
                </script>
                <?php 
        }
 

    }

    else{
        ?>
        <script>
          alert("Password are not matching")
          window.location.href="../dashboards/change_password.php";
        </script>
        <?php 

    }

   

    


  }

  

?>  

<script>
          alert("Password changed")
          window.location.href="../login/login.php";
        </script>








