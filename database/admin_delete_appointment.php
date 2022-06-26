<?php 
include "../includes/db.php";
if(isset($_POST['submit'])){

    $deldate = mysqli_real_escape_string($link,$_POST['deldate']);
    $hospital = mysqli_real_escape_string($link,$_POST['hospital']);
    echo $deldate;
    echo $hospital;

    
    $query = "delete from appointments where appdate = '$deldate' && apphospital = '$hospital'";
    mysqli_query($link,$query);

    
    ?>
    
    <script>
        alert("Delete Successfull")
        window.location.href="../dashboards/view_admin_appointment_list.php";
      </script>
      <?php  
}




?>

