<?php 
    include "../includes/db.php";
    include "../functions.php";

    session_start();  
    
    $pid = $_SESSION['id'];
    $pemail = $_SESSION['email'];
    $doc_id = $_GET['id'];

    
    

    $query = "select * from testusers where email = '$pemail'";
    $result = mysqli_query($link,$query);
    
    while($row =mysqli_fetch_assoc($result)){

        $pname = $row['name'];
        $pmobile = $row['mobile'];
        $paddress = $row['address'];
        
      
    }



    $doc_query = "select * from testusers where id = '$doc_id'";
    $doc_result = mysqli_query($link,$doc_query);

    while($doc_row =mysqli_fetch_assoc($doc_result)){

        $doc_id = $doc_row['id'];
        $doc_name = $doc_row['name'];
        $doc_hospital = $doc_row['hospital'];
        $doc_starttime = $doc_row['starttime'];
        $doc_endtime = $doc_row['endtime'];
        
        
        
      
    }




  

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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/userregistation.css">

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
                <a class="navbar-brand" href="../index.php">ODABS</a>
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

                        <div style="margin-left:100px;">
                            <li class="nav-item">

                                <a href="login.php"><button class="btn btn-outline-success"><b>Log
                                            In/Register</b></button></a>
                            </li>

                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </section>




    <!--Resigtraton form-->
    <section>
        <img class="wave" src="../img/wave.png">
    </section>

    <div class="container">
        <div class="row mt-1 mb-5">

            <div class="col-3"></div>
            <div class="col-6 pt-5">

                <center>
                    <img src="../img/avatar.svg" alt="" width="100px">
                </center>
                <h1 class="text-center">Appointment form</h1>
                
               <center> <h6 class="my-3" style="color:#2CC992">You have to insert Just appointment date</h6></center>
                
                <form action="../database/submit_appointment_form.php" method="post">

                   <div class="mb-3">
                        <label for="" class="form-label">Patinet Id</label>
                        <input type="text" class="form-control" name="pid" value="<?php echo "$pid";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Patinet Name</label>
                        <input type="text" class="form-control" name="pname" value="<?php echo "$pname";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Patinet Email</label>
                        <input type="email" class="form-control" name="pemail" value="<?php echo "$pemail";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Patinet mobile no</label>
                        <input type="text" class="form-control" name="pmobile" value="<?php echo "$pmobile";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Patinet Address</label>
                        <input type="text" class="form-control" name="paddress" value="<?php echo "$paddress";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Doctor ID</label>
                        <input type="text" class="form-control" name="docid" value="<?php echo "$doc_id";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Doctor name</label>
                        <input type="text" class="form-control" name="docname" value="<?php echo "$doc_name";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Hospital name</label>
                        <input type="text" class="form-control" name="apphospital" value="<?php echo "$doc_hospital";?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Visit time Start </label>
                        <input type="text" class="form-control" name="appstarttime" value=" <?php echo "$doc_starttime";?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Visit time End</label>
                        <input type="text" class="form-control" name="appendtime" value="<?php echo "$doc_endtime";?>">
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Appointment Date</label>
                        <input type="date" class="form-control" name="appdate" value="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Booking date</label>
                        <input type="text" class="form-control" name="appbdate" value="<?php echo "".date("m-d-Y"); ?>">
                    </div>


                    


                    <div class="text-center">
                        <input type="submit" class="btn btn-success" name="submit">
                    </div>



                </form>


            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



</body>

</html>