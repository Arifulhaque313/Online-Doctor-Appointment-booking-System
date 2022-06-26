


<?php 
include "../includes/db.php";


    $aid = $_GET['id'];
    $query = "delete from appointments where id = $aid";
    mysqli_query($link,$query);

    
    ?>
    <script>
        alert("Delete Successful")
        window.location.href="../dashboards/view_appointment_list.php";
      </script>
      <?php  






?>

