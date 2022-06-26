

<?php include "includes/db.php";

if(isset($_POST['submit'])){



$sbgroup1 = $_POST['sbgroup'];
$sbgroup = strtoupper($sbgroup1);
$query= "select * from blood where bgroup ='$sbgroup'";
$result =mysqli_query($link,$query);
?>



<?php 
  include "includes/header.php"
?>





<!--showing Blood Group -->
<section class="container-fluid bg-light py-3">


    <div class="container my-4 ">
        <h1 class="text-center mb-3" style="color:#089D49;">Doner Information</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
        while($row = mysqli_fetch_assoc($result)){

              $name = $row['name'];
              $email = $row['email'];
              $bgroup = $row['bgroup'];
              $ddate = $row['ddate'];
              $mobile = $row['mobile'];
              $address = $row['address'];
              

          	?>
            <div class="col-3"></div>
            <div class="col-6 my-3">
                <div class="card" style="width: 30rem;">


                    <div class="card-body">
                        <h4 class="card-title py-3"><b>Doner Name :</b> <?php echo $name; ?></h4>



                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Email :
                                </b><?php echo $email; ?></span></p>
                        <p class="card-text"><span class="las la-phone"></span> <span><b>Mobile :
                                </b> <?php echo $mobile; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Address :
                                </b> <?php echo $address; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Last Donate :
                                </b> <?php echo $ddate; ?></span></p>
                        <p class="card-text" style="color: red"><span class="las la-tint"></span> <span><b>Blood Group :
                                </b> <?php echo $bgroup; ?></span></p>



                    </div>
                </div>
            </div>

            <div class="col-3"></div>

            <?php
    }
}

    ?>
        </div>


    </div>

</section>





<?php 
  include "includes/footer.php"
?>