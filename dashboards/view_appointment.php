<?php   session_start();

include "../includes/db.php";

$docid = $_GET['id'];
$appdate = $_GET['appdate'];


$sid = $_SESSION['id'];
$query = "select * from appointments where docid = $docid AND appdate = '$appdate' ";
$result = mysqli_query($link,$query);





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboards.css">


    <title>Online Doctor Appointment Booking System</title>
</head>

<body>



    <!--Navbar-->
    <section id="nav-bar">

        <div class="head container-fluid ">

            <p class=""> <i class="fas fa-phone-alt" style="color: white;font-size:12px;line-height:40px;"></i> <a
                    href="">16234</a> </p>
            <p class=""> <a href="">Contact Us</a> </p>


        </div>

        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="index.php">ODABS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bar2"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="../index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../hospital.php">Hospitals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../bloodbank.php">Blood Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../aboutus.php">About Us</a>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>

    </section>




    <div class="div-border">


        <!--Appointments slip-->
        <section class="container">

            <?php 

            $count = 0;
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $appdate = $row['appdate'];
                $pid = $row['pid'];
                $pname = $row['pname'];
                $pmobile = $row['pmobile'];
                $paddress = $row['paddress'];
                $docname = $row['docname'];
                $apphospital = $row['apphospital'];
                $appstarttime = $row['appstarttime'];
                $appendtime = $row['appendtime'];
                $appbdate = $row['appbdate'];
                $cserial = $row['cserial'];
               
                

                $count = $count+1;

                if($sid == $pid){

                
               

                
               


           
        
        ?>
            

           
            






            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <center>
                        <h1 class="my-5" style="color:#2CC992">Appointment</h1>
                    </center>

                    <h4 style="text-decoration: underline ;color:#2CC992">Appointment Information</h4>
                    <h5 class="text-end"> Running Serial : <span class="" style="border : 1px solid green; padding: 3px 5px; color: green ; font-weight: bold"><?php echo $cserial ?></span> </h5>
                    <p><b>Appoitment Date : </b> <?php  echo $appdate;   ?></p>
                    <p><b>Serial no : </b> <?php  echo $count;   ?> </p>
                    <p><b>Doctor Name : </b> <?php  echo $docname;   ?> </p>
                    <p><b>Appointment Duration : <?php  echo $appstarttime."--".$appendtime;   ?></b></p>
                    <p><b>Your Appoitment Time : <?php  echo $appstarttime. "+ (".$count. " * 15 min)";   ?> </b></p>
                    <p><b>Hospital Name : </b><?php  echo $apphospital;   ?></p>
                    <br>
                    <h4 style="text-decoration: underline; color:#2CC992">Personal Information</h4>
                    <p><b>Name : <?php  echo $pname;   ?></b></p>
                    <p><b>Mobile : </b><?php  echo $pmobile;   ?></p>
                    <p><b>Address : </b> <?php  echo $paddress;   ?></p>

                    <div class="text-end my-5"><button onclick="print1()" class="btn btn-primary">

                            Print

                        </button></div>

                    <script type="text/javascript">
                    function print1() {
                        window.print();

                    }
                    </script>




                </div>
                <div class="col-3"></div>
            </div>

            <div class="bg-dark my-5" style="height:1px"></div>
            <br>

            <?php
            
                 }
           }

            ?>





        </section>