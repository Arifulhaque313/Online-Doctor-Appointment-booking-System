
<?php 
include "../includes/db.php";


    $id = $_GET['id'];
    $query = "delete from testusers where id = $id";
    mysqli_query($link,$query);

    
    ?>
    <script>
        alert("Delete Successful")
        window.location.href="../dashboards/view_admin_list.php";
      </script>
      <?php  






?>

