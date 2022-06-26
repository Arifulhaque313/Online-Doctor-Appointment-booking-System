<?php



  session_start();
  include"../includes/db.php";

  if(isset($_POST['submit'])){

    $cserial = mysqli_real_escape_string($link,$_POST['cserial']);

    
    $user_id = $_SESSION['id'] ;
    $p_date = date("d-m-Y");

    $query="update appointments set cserial = '$cserial' where docid= $user_id AND appdate = '$p_date'";
    mysqli_query($link,$query);
   


  }

?>  

<script>

    window.location.href = "../dashboards/view_today_doctor_appointment_list.php"
</script>







