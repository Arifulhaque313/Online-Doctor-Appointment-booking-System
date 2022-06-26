<?php

  include"../includes/db.php";

  if(isset($_POST['submit'])){

    $pid = mysqli_real_escape_string($link,$_POST['pid']);
    $pname= mysqli_real_escape_string($link,$_POST['pname']);
    $pemail = mysqli_real_escape_string($link,$_POST['pemail']);
    $pmobile = mysqli_real_escape_string($link,$_POST['pmobile']);
    $paddress = mysqli_real_escape_string($link,$_POST['paddress']);
    $docid = mysqli_real_escape_string($link,$_POST['docid']);
    $docname = mysqli_real_escape_string($link,$_POST['docname']);
    $apphospital = mysqli_real_escape_string($link,$_POST['apphospital']);

    $appstarttime = mysqli_real_escape_string($link,$_POST['appstarttime']);
    $appendtime = mysqli_real_escape_string($link,$_POST['appendtime']);
    
    $appdate = mysqli_real_escape_string($link,$_POST['appdate']);
    $appdate = strtotime($appdate);
    $appdate = date('d-m-Y',$appdate);

    
    $appbdate = mysqli_real_escape_string($link,$_POST['appbdate']);
    $appbdate = strtotime($appbdate);
    $appbdate = date('d-m-Y',$appbdate);

    $status ="Empty";
    $cserial =0;

  


    $app_query = "select * from appointments where docid = $docid AND appdate = '$appdate'";
    $app_query_result = mysqli_query($link,$app_query);
    $app_query_count = mysqli_num_rows($app_query_result);
    
    


    if($app_query_count>=20){
      ?>
      <script>
        alert("All the appointments are booked")
        window.location.href="../dashboards/user_dashboard.php";
      </script>
      <?php  

    }


    else{
    
      $query = "insert into appointments(pid, pname, pemail, pmobile, paddress, docid,docname, apphospital, appstarttime, appendtime, appdate, appbdate, cserial, status) values('$pid','$pname','$pemail','$pmobile','$paddress','$docid','$docname','$apphospital','$appstarttime', '$appendtime','$appdate','$appbdate', '$cserial','$status')";
      mysqli_query($link,$query);

    }

  }

?>  



<script>
    
    window.location.href="../dashboards/user_dashboard.php";
</script>







