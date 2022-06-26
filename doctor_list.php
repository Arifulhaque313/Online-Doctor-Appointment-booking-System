<?php session_start(); ?>

<?php include "includes/db.php"; ?>
<?php 


$hname = $_SESSION['hname'];
$query= "select * from testusers where role = 'doctor' AND hospital = '$hname'";
$result =mysqli_query($link,$query);

?>




<?php  include "includes/header.php"; ?>

<!--Hospital Section-->
<section class="container-fluid bg-light py-3">


    <div class="container my-4 ">
        <h1 class="text-center " style="color:#089D49;">Doctor list</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
        while($row = mysqli_fetch_assoc($result)){

              $name = $row['name'];
              $email = $row['email'];
              $mobile = $row['mobile'];
              $address = $row['address'];
              
              $image = $row['image'];

          	?>
            <div class="col-4">
                <div class="card">

                    <img src="" height="300" class="card-img-top" alt="Hospital Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name; ?></h5>

                        <p class="card-text"><span class="las la-envelope"></span> <span><b>Email :
                                </b><?php echo $email; ?></span></p>
                        <p class="card-text"><span class="las la-phone"></span> <span><b>Mobile :
                                </b> <?php echo $mobile; ?></span></p>
                        <p class="card-text"><span class="las la-location-arrow"></span> <span><b>Address :
                                </b> <?php echo $address; ?></span></p>

                        <a href=""><button class="btn btn-primary">Get Appointments</button></a>
                    </div>
                </div>
            </div>

            <?php
    }

    ?>







        </div>


    </div>

</section>



   <!--Footer-->
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









