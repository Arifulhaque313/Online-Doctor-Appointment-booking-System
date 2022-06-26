<?php   session_start(); ?>
<?php   include "../functions.php";?>
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

    <div class="div-border">

    </div>

    <!--super admin dashboard section-->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span>Super Admin Dashboard</h1>
        </div>


        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="super_admin_dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="sad_admins.php"><span class="las la-user-cog"></span>
                        <span>Admins</span></a>
                </li>

                <li>
                    <a href="sad_hospitals.php" class="active"><span class="las la-hospital"></span>
                        <span>Hospitals</span></a>
                </li>



                <li>
                    <a href="sad_doctors.php"><span class="las la-stethoscope"></span>
                        <span>Doctors</span></a>
                </li>


            </ul>

        </div>

    </div>




    <!--Dashboard Main content -->
    <div class="main-content">
        <header>

            <h4>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h4>



            <div class="user-wrapper">
                <img src="<?php  echo image_verification(); ?>" height="40px" width="40px " alt="">

                <div>
                    <div class="dropdown1">
                        <h4 class="dropbtn1"><?php   echo $_SESSION['name'] ?></h4>
                        <small><?php   echo $_SESSION['role'] ?></small>

                        <div class="dropdown-content1">
                            <a href="user_view_profile.php">View Profile</a>
                            <a href="user_update_profile.php">Update Profile</a>
                            <a href="../database/logout.php">Log Out</a>
                        </div>
                    </div>
                </div>

            </div>



        </header>



        <main>

        </main>








        <!--SUper admin dashboard admin panel start-->
        <main>

            <div class="row">


                <div class="col-lg-4 col-12">
                    <div class="card m-3" style="width: 21rem;">

                        <div class="card-body">
                            <h5 class="card-title py-2 fw-bold">View Hospital</h5>
                            <div class="row">
                                <div class="col-4 " style="font-size:50px; color:#707CD2;"><span
                                        class="las la-hospital"></span>
                                </div>

                                <div class="col-8 pt-3" style="font-size:30px; color:">
                                    <a href="../super_admin_hospital.php" class=""
                                        style="text-decoration : none; padding: 8px 10px; background-color:#707CD2; color: white; font-size:16px; border-radius:5px">View
                                        Hospitals</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>



                <div class="col-lg-4 col-12">
                    <div class="card m-3" style="width: 21rem;">

                        <div class="card-body">
                            <h5 class="card-title py-2 fw-bold">Add Hospital</h5>
                            <div class="row">
                                <div class="col-4 " style="font-size:50px; color:#7ACE4C;"><span
                                        class="las la-plus"></span>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-5 pt-3" style="font-size:30px;  color:#7ACE4C">
                                    <a href="../login/add_hospital_sign_up.php" class=""
                                        style="text-decoration : none; padding: 8px 10px; background-color:#7ACE4C; color: white; font-size:16px; border-radius:5px">Add</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>



                <div class="col-lg-4 col-12">

                    <div class="card m-3" style="width: 21rem;">

                        <div class="card-body">
                            <h5 class="card-title py-2 fw-bold">Remove Hospital</h5>
                            <div class="row">
                                <div class="col-4 " style="font-size:50px; color:#2CABE3;"><span
                                        class="las la-trash"></span>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-5 pt-3" style="font-size:30px; color:#2CABE3">
                                    <a href="../login/delete_hospital_form.php" class=" "
                                        style="text-decoration : none; padding: 8px 10px; background-color:#2CABE3; color: white; font-size:16px; border-radius:5px">Drop</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>














        </main>




        <!--SUper admin dashboard admin page end-->



    </div>








    <!--Footer
    <footer class="container-fluid ">

        <div class="container">

            <div class="row py-5">
                <div class="col-lg-4 col-12 text-center text-white">
                    <h3>ODABS</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nisi unde fuga labore. Quod explicabo
                    eveniet odit possimus, rerum laboriosam fugiat velit ducimus distinctio veniam voluptatem, autem
                    natus vero enim?
                </div>
                <div class="col-lg-4 col-12 text-center text-white">
                    <h3>Second Setion</h3>

                </div>
                <div class="col-lg-4 col-12 text-center text-white">

                    <h3>Contact Us</h3>
                    <p>facebook :Facebook.com/odbas</p>
                    <p>gmail :odbas@gmail.com</p>
                    <p>phone :01849737540</p>

                </div>

            </div>

        </div>


        </div>
    </footer>


    <div class="copyright">
        <p class="text-center p-3 ">all the copyright &copy; 2021 reserve by ODAB</p>

    </div>

-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>











<style>
.copyright {
    height: 55px;
    color: white;
    background-color: #2CC992;
}
</style>