<?php session_start(); ?>

<?php include "includes/db.php";




$query= "select * from blood";
$result =mysqli_query($link,$query);
?>



<?php 
  include "includes/header.php"
?>

<!--Blood group button start-->
<section class="container-fluid bg-light py-3">

    <h1 class="text-center mb-5" style="color:#089D49;">Blood Bank</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form class="form-inline my-2 my-lg-0" action="search_blood.php" method="post">
                    <input class="form-control mr-sm-2" style="width:400px!important" type="text" name="sbgroup"
                        placeholder="Search Blood group" aria-label="Search">
                    <button class="btn btn-outline-success my-2 " name="submit" type="submit">Search</button>
                </form>
            </div>

            <div class="col-lg-6 col-12 text-center">
                <a href="login/donate_blood_form.php"> <button class="btn btn-success" style="">Give Your information
                        for donate blood </button></a>
            </div>
        </div>
    </div>
</section>
<!--Blood group button end-->





<!-- spacebeteen line -->
<div class=" container bg-dark" style="; height:1px"></div>




<!--showing Blood Group -->
<section class="container-fluid bg-light py-3">


    <div class="container my-4 ">
        <h1 class="text-center mb-5" style="color:#089D49;">Doner Information</h1>
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

    ?>
        </div>


    </div>

</section>





<?php 
  include "includes/footer.php"
?>