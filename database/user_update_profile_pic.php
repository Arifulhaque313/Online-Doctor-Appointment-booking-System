<?php

  session_start();

  include "../includes/db.php";

  if(isset($_POST['submit'])){

    
    $id = $_SESSION['id'];
    $filename = $_FILES["himage"]["name"];
    $tempname = $_FILES["himage"]["tmp_name"];
    $folder = "../img/".$filename;
    move_uploaded_file($tempname,$folder);

  


   
      $query="update testusers set image = '$folder' where id = $id";
    mysqli_query($link,$query);
    


  }

?>  

<script>
    alert("Upload successful");
    window.location.href="../login/login.php";
</script>



