<?php   session_start();


include "../functions.php";

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

    </div>


    <section class="container">

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                    <center><h1 class="my-5">Profile</h1></center>

                    <center><img src="<?php  echo image_verification(); ?>" class="mb-3" alt="" style="border-radius:50% ; width:250px!important; height:250px!important;" ></center>

                    <h3><b>Name: <?php  echo $_SESSION['name']; ?> </b></h2>
                    <h4 class="my-4"><span class="lab la-orcid pe-2"></span><b>Id: </b><?php  echo $_SESSION['id']; ?> </h4>
                    <h4 class="my-4"><span class="las la-envelope-open pe-2"></span><b>Email:  </b> <?php  echo $_SESSION['email']; ?></h4>
                    <h4 class="my-4"><span class="las la-phone pe-2"></span><b>Mobile: </b><?php  echo $_SESSION['mobile']; ?></h4>
                    <h4 class="my-4"><span class="las la-location-arrow pe-2"></span><b>Address : </b><?php  echo $_SESSION['address']; ?></h4>
                    <h4 class="my-4"><span class="las la-user pe-2"></span><b>Role: </b> <?php  echo $_SESSION['role']; ?></h4>
                   



            </div>
            <div class="col-3"></div>
        </div>
            
    </section>
    





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