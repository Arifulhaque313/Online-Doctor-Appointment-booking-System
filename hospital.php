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
        <h1 class="text-center pb-4" style="color:#089D49;">Hospital list</h1>


        <!--Find Hospital -->
        <div class="row mb-5">
            <div class="col-lg-4 col-12"></div>
            <div class="col-lg-4 col-12">

                <form action="">

                    <label for="" class="form-label">Select your City : </label>
                    <select name="" id="" class="form-control">
                        <option value="">Gazipur</option>
                        <option value="">Joydebpur</option>
                        <option value="">Savar</option>
                        <option value="">Tongi</option>
                        <option value="">Uttara</option>
                        <option value="">Khilkhet</option>
                    </select>


            </div>
            <div class="col-lg-4 col-12">
                <input type="submit" value="Find" class="btn btn-success" style="margin-top:32px">

                </form>
            </div>
        </div>
        <!--Find Hospital end-->




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
            <div class="col-lg-4 col-12">
                <div class="card">

                    <img src="<?php echo $himage; ?>" height="300" class="card-img-top" alt="Hospital Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hname; ?></h5>

                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Email :
                                </b><?php echo $hemail; ?></span></p>
                        <p class="card-text"><span class="las la-envelope"></span> <span><b>hotline :
                                </b><?php echo $hhotline; ?></span></p>
                        <p class="card-text"><span class="las la-phone"></span> <span><b>Mobile :
                                </b> <?php echo $hmobile; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Address :
                                </b> <?php echo $haddress; ?></span></p>

                        <a href="doctor/doctor_list.php?id=<?php  echo $hname;?>"><button class="btn btn-primary">View
                                doctors</button></a>

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