<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<!--Old form validation 

<?php


  include"../includes/db.php";

  if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $cpassword = mysqli_real_escape_string($link,$_POST['cpassword']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
    $role = mysqli_real_escape_string($link,$_POST['role']);
   

    $pass = password_hash ($password, PASSWORD_BCRYPT);
    $cpass = password_hash ($cpassword, PASSWORD_BCRYPT);


    $email_query = "select * from testusers where email = '$email'";
    $email_result = mysqli_query($link,$email_query);
    $email_count = mysqli_num_rows($email_result);


    if($email_count>0){
      ?>
      <script>
        alert("Email already exist")
        window.location.href="userregistration.php";
      </script>
      <?php  

    }

    elseif($password != $cpassword){
      ?>
      <script>
        alert("Password are not matching")
        window.location.href="userregistration.php";
      </script>
      <?php  

    }
    else{
      $query="insert into testusers(name, email, password, cpassword, mobile, address, role) values('$name','$email','$pass','$cpass','$mobile','$address','$role')";
    mysqli_query($link,$query);
    }


  }


?>  

<script>
    alert("Registration successful");
    window.location.href="../login/login.php";
</script>


-->





</body>
</html>