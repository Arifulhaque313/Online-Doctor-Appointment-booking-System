<?php 
include "../includes/db.php";
if(isset($_POST['submit'])){

    $id = mysqli_real_escape_string($link,$_POST['id']);
    $query = "delete from hospital where id = $id";
    mysqli_query($link,$query);

    
    ?>
    <script>
        alert("Delete Successful")
        window.location.href="../login/delete_hospital_form.php";
      </script>
      <?php  

}




?>

