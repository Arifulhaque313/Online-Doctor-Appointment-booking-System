<?php



  session_start();
  include"../includes/db.php";

  if(isset($_POST['submit'])){

    $status = mysqli_real_escape_string($link,$_POST['status']);

    
    $user_id = $_SESSION['id'] ;
   

    $query="update appointments set status = '$status' where docid= $user_id ";
    mysqli_query($link,$query);
   


  }

?>  

<script>

    window.location.href = "../dashboards/doctor_dashboard.php"
</script>







