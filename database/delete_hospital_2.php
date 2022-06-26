
<?php 
include "../includes/db.php";


    $id = $_GET['id'];
    $query = "delete from hospital where id = $id";
    mysqli_query($link,$query);

    
    ?>
    <script>
        alert("Delete Successful")
        window.location.href="../super_admin_hospital.php";
      </script>
      <?php  






?>

