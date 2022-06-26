<?php session_start(); ?>

<?php include "includes/db.php"; ?>
<?php 



$query= "select * from hospital";
$result =mysqli_query($link,$query);
?>




<?php 
  include "includes/header.php"
?>


<!--Hospital Section-->
<section class="container-fluid bg-light py-3">


    <div class="container my-4 ">
        <h1 class="text-center " style="color:#089D49;">Hospital list</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
        while($row = mysqli_fetch_assoc($result)){
              
              $id = $row['id'];
              $hname = $row['hname'];
              $hemail = $row['email'];
              $hhotline = $row['hotline'];
              $hmobile = $row['mobile'];
              $haddress = $row['address'];
             
              $himage = $row['himage'];

          	?>
            <div class="col-lg-4 col-12 my-3">
                <div class="card">

                    <img src="<?php echo $himage; ?>" height="300" class="card-img-top" alt="Hospital Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hname; ?></h5>

                        <h6 class="card-title"><b>Hospital Id : </b><?php echo $id; ?></h6>

                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Email :
                                </b><?php echo $hemail; ?></span></p>
                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Hotline :
                                </b><?php echo $hhotline; ?></span></p>
                        <p class="card-text"><span class="las la-phone"></span> <span><b>Mobile :
                                </b> <?php echo $hmobile; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Address :
                                </b> <?php echo $haddress; ?></span></p>

                        <a href="doctor/doctor_list.php?id=<?php  echo $hname;?>"><button class="btn btn-primary">View
                                doctors</button></a>
                        <br>

                        <div class="text-end mt-5"> <a href="database/delete_hospital_2.php?id=<?php   echo $id ?>"
                                style="text-decoration:none;" class="badge bg-danger">Drop Hospital</a></div>
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