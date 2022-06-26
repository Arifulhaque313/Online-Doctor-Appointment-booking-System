<?php session_start(); ?>

<?php include "includes/db.php"; ?>
<?php 



$query= "select * from hospital";
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">  
<link rel="stylesheet" href="css/style.css">

    <title>Online Doctor Appointment Booking System</title>
  </head>
  <body>
  


<!--Navbar-->
<section id="nav-bar">

<div class="head container-fluid ">

  <p class=""> <i class="fas fa-phone-alt" style="color: white;font-size:12px;line-height:40px;"></i> <a href="">16234</a> </p>
  <p class="">  <a href="">Contact Us</a> </p>
        

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
          <a class="nav-link " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="dashboards/user_dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hospital.php">Hospitals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bloodbank.php">Blood Bank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="aboutus.php">About Us</a>
        </li>
        
       
      </ul>
    </div>
  </div>
</nav>

</section>




<!--Hospital Section-->
<section class="container-fluid bg-light py-3">


    <div class="container my-4 ">
        <h1 class="text-center " style="color:#089D49;">Hospitals list</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
        while($row = mysqli_fetch_assoc($result)){

              $hname = $row['hname'];
              $hemail = $row['email'];
              $hmobile = $row['mobile'];
              $haddress = $row['address'];
              $hdoctor = $row['viewdoctor'];
              $himage = $row['himage'];

          	?>
            <div class="col-4">
                <div class="card">

                    <img src="<?php echo $himage; ?>" height="300" class="card-img-top" alt="Hospital Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hname; ?></h5>

                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Email :
                                </b><?php echo $hemail; ?></span></p>
                        <p class="card-text"><span class="las la-phone"></span> <span><b>Mobile :
                                </b> <?php echo $hmobile; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Address :
                                </b> <?php echo $haddress; ?></span></p>

                        <a href="<?php echo $hdoctor; ?>"><button class="btn btn-primary">View doctors</button></a>

                    </div>
                </div>
            </div>

            <?php
    }

    ?>







        </div>


    </div>

</section>










<?php 
  include "includes/footer.php"
?>