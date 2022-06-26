<?php session_start();  ?>


<?php   
function image_verification(){

    if($_SESSION['image']){
        return $_SESSION['image'];

    }
    else{

        
        return "../img/avatar.svg";
    }
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
                    <img src="<?php  echo image_verification(); ?>" alt="" style="border-radius:50% ; width:100px!important; height:100px!important;" >
                </center>

                <!--change picture and password -->
                <div class="text-end"> <a href="update_user_profile_pic.php"  style="font-size:14px; text-decoration:none; color:#2CC992">Change profile Picture</a> </div>
                <div class="text-end"> <a href="change_password.php"  style="font-size:14px; text-decoration:none; color:#2CC992">Change Password</a> </div>
                
                
                <!--update profile -->
                <h1 class="text-center">Change Password</h1>
                <form action="../database/change_password.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Old Password</label>
                        <input type="password" class="form-control" name="oldpassword"  Required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="npassword"  Required>
                    </div>

               

                    <div class="mb-3">
                        <label for="" class="form-label">Confirm new password</label>
                        <input type="password" class="form-control" name="cnpassword"  Required>
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