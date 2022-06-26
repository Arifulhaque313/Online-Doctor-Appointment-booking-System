<?php session_start(); ?>

<?php include "../includes/db.php"; ?>
<?php 


$h_name = $_SESSION['hospital'];
$did = $_SESSION['id'];
$query= "select * from testusers where role = 'doctor' AND hospital = '$h_name' AND id = '$did' ";
$result =mysqli_query($link,$query);

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

                        <div style="margin-left:100px;">
                            <li class="nav-item">

                                <a href="../login/login.php"><button class="btn btn-outline-success"><b>Log
                                            In/Register</b></button></a>
                            </li>

                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <!--Hospital Section-->
    <section class="container-fluid bg-light py-3">


        <div class="container my-4 ">
            <h1 class="text-center my-5 " style="color:#089D49;">Doctor list</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">

            <table class="table">
                <tr>
                    <th class="col">Id</th>
                    <th class="col">Image</th>
                    <th class="col">Name</th>
                    <th class="col">Schedule Day</th>
                    <th class="col">Time</th>
                    <th class="col">Action</th>
                </tr>
                <?php
               
        while($row = mysqli_fetch_assoc($result)){
              
              $id = $row['id'];
              $name = $row['name'];
              $startday = $row['startday'];
              $endday = $row['endday'];
              $starttime = $row['starttime'];
              $endtime = $row['endtime'];
              
              
              $image = $row['image'];

          	?>

                <tr>
                    <td class=""><?php   echo $id; ?></td>
                    <td class=""><img src="<?php   echo $image; ?>" alt="doctor image" width="60"></td>
                    <td class=""><?php   echo $name?></td>
                    <td class=""> <?php echo $startday. "--".$endday;  ?></td>
                    <td class="">From <?php echo $starttime. "--  To   ".$endtime;  ?></td>
                    <td class=""><a href="../login/add_doctor_schedule_id.php" style="text-decoration:none;" class="badge bg-danger">Change Schedule</a></td>
                </tr>
               



               

                <?php
    }

    ?>
    </table>







            </div>


        </div>

    </section>



    <!--Footer-->
    <div class=" mt-5">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white pt-5" style="background-color: black">


            <!-- Section Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">

                    <div class="row mt-3">
                        <!-- column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-5">
                            <!-- Content -->
                            <h2 class="text-uppercase fw-bold" style="color: #2CC992">ODABS</h2>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color:white; height: 2px" />
                            <p class="" style="text-align:justify;">
                                ODABS is a web application. For user they can easily get multiple hospitals details,
                                Hospitalwise Doctor details.
                                If you find any doctor who will fulfill their requirment then they can book an
                                Appointment. For Hospital Authority,
                                it is a great platform to promote their hospital. Because if they add thier hospital in
                                this system then they can appointment
                                from our system. It will bring benifits for their hospital.
                            </p>
                        </div>



                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-5">
                            <!-- Links -->
                            <h4 class="text-uppercase fw-bold">Our Services</h4>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color:white; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Find Doctor</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Book an Appointment </a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Add Hospital</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Manage Your Hospital Appointment Booking System</a>
                            </p>
                        </div>



                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
                            <!-- Links -->
                            <h4 class="text-uppercase fw-bold">Useful links</h4>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p>
                                <a href="index.php" class="">Home</a>
                            </p>
                            <p>
                                <a href="hospital.php" class="">Hospitals</a>
                            </p>
                            <p>
                                <a href="bloodbank.php" class="">Blood Bank </a>
                            </p>
                            <p>
                                <a href="aboutus.php" class="">About us</a>
                            </p>
                        </div>



                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-5">
                            <!-- Links -->
                            <h4 class="text-uppercase fw-bold">Contact</h4>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: white; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> House no : 234, Kashimpur, Gazipur</p>
                            <p><i class="fas fa-envelope mr-3"></i> infoodabs@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 8801345216587</p>
                            <p><i class="fas fa-print mr-3"></i> + 8808365421789</p>
                        </div>

                    </div>

                </div>

                <div class="container mb-2" style="height:2px; background-color:white"></div>



                <!--Social Media icon start -->
                <section class="container d-flex justify-content-between p-4 text-white" style="background-color:black">

                    <div class="me-2">
                        <span>Get connected with us on social networks:</span>
                    </div>

                    <div>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>

                </section>


            </section>
            <div class="copyright">
                <p class="text-center pt-3 " style=" height: 55px; color: white;background-color: #2CC992; ">
                    All the copyright &copy; 2021 reserve by ODABS</p>

            </div>



        </footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>