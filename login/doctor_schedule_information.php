<?php 
    include "../includes/db.php";
    include "../functions.php";

    if(isset($_POST['submit'])){

        $id = $_POST['id'];

        $query = "select * from testusers where id = '$id'";
        $result = mysqli_query($link,$query);
        
        while($row =mysqli_fetch_assoc($result)){
            
            $id = $row['id'];
            $name = $row['name'];
            $hospital = $row['hospital'];
            
          
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
                    <img src="../img/avatar.svg" alt="" width="100px">
                </center>
                <h1 class="text-center">Doctor Schedule Information</h1>
                <form action="../database/submit_schedule_information.php" method="post">
                <div class="mb-3">
                        <label for="" class="form-label">Doctor Id</label>
                        <input type="text" class="form-control" name="id" value="<?php echo "$id";?>"  >
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo "$name";?>"  >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Hospital Name</label>
                        <input type="text" class="form-control" name="hname" value="<?php echo "$hospital";?>"  >
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Start Day</label>

                        <select name="startday" id="" class="form-control"> 
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="-">-</option>
                            
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">End Day</label>

                        <select name="endday" id="" class="form-control"> 
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="-">-</option>
                            
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Start time</label>

                        <select name="starttime" id="" class="form-control"> 
                            <option value="9 AM">9 AM</option>
                            <option value="10 AM">10 AM</option>
                            <option value="11 AM">11 AM</option>
                            <option value="12 PM">12 PM</option>
                            <option value="1 PM">1 PM</option>
                            <option value="2 PM">2 PM</option>
                            <option value="3 PM">3 PM</option>
                            <option value="4 PM">4 PM</option>
                            <option value="5 PM">5 PM</option>
                            <option value="6 PM">6 PM</option>
                            <option value="7 PM">7 PM</option>
                            <option value="8 PM">8 PM</option>
                            <option value="9 PM">9 PM</option>
                            <option value="10 PM">10 PM</option>
                            <option value="11 PM">11 PM</option>
                            
                            
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">End time</label>

                        <select name="endtime" id="" class="form-control"> 
                        <option value="9 AM">9 AM</option>
                            <option value="10 AM">10 AM</option>
                            <option value="11 AM">11 AM</option>
                            <option value="12 PM">12 PM</option>
                            <option value="1 PM">1 PM</option>
                            <option value="2 PM">2 PM</option>
                            <option value="3 PM">3 PM</option>
                            <option value="4 PM">4 PM</option>
                            <option value="5 PM">5 PM</option>
                            <option value="6 PM">6 PM</option>
                            <option value="7 PM">7 PM</option>
                            <option value="8 PM">8 PM</option>
                            <option value="9 PM">9 PM</option>
                            <option value="10 PM">10 PM</option>
                            <option value="11 PM">11 PM</option>
                            
                        </select>
                        
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