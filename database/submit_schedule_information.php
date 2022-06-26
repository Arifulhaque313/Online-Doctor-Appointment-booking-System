<?php   

    include "../includes/db.php";

    if(isset($_POST['submit'])){
        $id = mysqli_real_escape_string($link,$_POST['id']);
        
        $startday = mysqli_real_escape_string($link,$_POST['startday']);
        $endday = mysqli_real_escape_string($link,$_POST['endday']);
        $starttime = mysqli_real_escape_string($link,$_POST['starttime']);
        $endtime = mysqli_real_escape_string($link,$_POST['endtime']);

        
        $query ="update testusers set startday = '$startday', endday='$endday', starttime = '$starttime', endtime = '$endtime' where id=$id";
        $result = mysqli_query($link,$query);


    }



?>


<script>

    alert("Schedule added")

    window.location.href="../dashboards/ad_schedule.php";

</script>