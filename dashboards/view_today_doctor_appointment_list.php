<?php   session_start();


include "../functions.php";
include "../includes/db.php";


$p_date = date("d-m-Y");

$id = $_SESSION['id'];
$query = "select * from appointments where docid = $id AND appdate = '$p_date'";
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
        <div>




            <!--Serial Section-->
            <section class="continaer">


                <div class="row">

                    <center>
                        <h2 class="my-3">Current Serial is <span class="text-success"><?php   get_current_serial()  ?></span> </h2>
                    </center>



                    <div class="row">
                        <div class="col-4"></div>
                    

                        <div class="col-4">
                            <form action="../database/submit_current_serial.php" method="post">
                                <label for="" class="form-label">Set Serial</label>
                               <select name="cserial" id="" class="form-control">

                               <option value="0">0</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                               <option value="6">6</option>
                               <option value="7">7</option>
                               <option value="8">8</option>
                               <option value="9">9</option>
                               <option value="10">10</option>
                               <option value="11">11</option>
                               <option value="12">12</option>
                               <option value="13">13</option>
                               <option value="14">14</option>
                               <option value="15">15</option>
                               <option value="16">16</option>
                               <option value="17">17</option>
                               <option value="18">18</option>
                               <option value="19">19</option>
                               <option value="20">20</option>


                               </select>

                                <input type="submit" name="submit" value="submit" class="btn btn-success my-2">
                            </form>
                        </div>



                        <div class="col-4"></div>
                    </div>
                </div>
            </section>

            <!--Appointments slip-->



            <center><h3 class="my-5">Appointment Table</h3></center>
            <table class="table container">
                <tr>
                    <th class="col">Serial No</th>
                    <th class="col">Appointment Id</th>
                    <th class="col">Patient name</th>
                    <th class="col">Doctor's name</th>
                    <th class="col">Hospital name</th>
                    <th class="col">Appointment Date</th>
                    <th class="col">view</th>

                </tr>

                <?php
             
            
            $count = 0;
            while($row = mysqli_fetch_assoc($result)){
                $appid = $row['id'];
                $pname = $row['pname'];
                $docid = $row['docid'];
                $docname = $row['docname'];
                $apphospital = $row['apphospital'];
                $appdate = $row['appdate'];
                $count++;
               
            

          	?>

                <tr>
                    <td class=""><?php   echo $count; ?></td>
                    <td class=""><?php   echo $appid; ?></td>
                    <td class=""><?php   echo $pname; ?></td>
                    <td class=""><?php   echo $docname; ?></td>
                    <td class=""><?php   echo $apphospital; ?></td>
                    <td class=""><?php   echo $appdate?></td>
                    <td class=""><a href="view_appointment.php?id=<?php echo $docid ?>" style="text-decoration:none;"
                            class="badge bg-success">view appointment</a></td>

                </tr>






                <?php
    }

    ?>
            </table>

</body>

</html>