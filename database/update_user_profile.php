<?php

  session_start();


  include "../includes/db.php";

  if(isset($_POST['submit'])){

    $name1 = mysqli_real_escape_string($link,$_POST['name1']);
    $id = $_SESSION['id'];
    $mobile1 = mysqli_real_escape_string($link,$_POST['mobile1']);
    $address1 = mysqli_real_escape_string($link,$_POST['address1']);

     $query="update testusers set name='$name1', mobile='$mobile1', address='$address1' where id= $id";
    mysqli_query($link,$query);
    


  }


?>

<script>
alert("Update Successful");
window.location.href = "../login/login.php";
</script>