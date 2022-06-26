<?php

  include"../includes/db.php";

  if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $bgroup = mysqli_real_escape_string($link,$_POST['bgroup']);
    $ddate = mysqli_real_escape_string($link,$_POST['ddate']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
   

  
   
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
   

    


    $email_query = "select * from testusers where email = '$email'";
    $email_result = mysqli_query($link,$email_query);
    $email_count = mysqli_num_rows($email_result);


    if($email_count>0){
      ?>
      <script>
        alert("Email already exist")
        window.location.href="../login/donate_blood_form.php";
      </script>
      <?php  

    }

    elseif(!preg_match ($pattern, $email) ){
      ?>
      <script>
        alert("Email Is invalid")
        window.location.href="../login/donate_blood_form.php";
      </script>
      <?php  

    }

    elseif(!preg_match ("/^[0-9]*$/", $mobile)){
      ?>
      <script>
        alert("Please insert valid mobile number")
        window.location.href="../login/donate_blood_form.php";
      </script>
      <?php  
    }

    elseif(strlen ($mobile) != 11){
      ?>
      <script>
        alert("Mobile number should be 11 digit")
        window.location.href="../login/donate_blood_form.php";
      </script>
      <?php  
    }

    elseif(strlen ($address) < 12){
      ?>
      <script>
        alert("Please insert details address")
        window.location.href="../login/donate_blood_form.php";
      </script>
      <?php  
    }


    else{
      $query="insert into blood(name, email, bgroup, ddate, mobile, address) values('$name','$email','$bgroup','$ddate','$mobile','$address')";
    mysqli_query($link,$query);
    }


  }

?>  

<script>
    alert("Registration successful");
    window.location.href="../bloodbank.php";
</script>






