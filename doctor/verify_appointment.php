<?php 
    session_start();

    if($_SESSION['name']){
        $id = $_GET['id']; 
        ?>
        <script>
            window.location.href="../login/book_appointment_form.php?id=<?php  echo $id  ?>";
        </script>

        <?php
        
    }

    else{
        ?>
        <script>

            alert("For appointment You Must have an account");
            window.location.href="../login/login.php";
        </script>

        <?php
    }



?>