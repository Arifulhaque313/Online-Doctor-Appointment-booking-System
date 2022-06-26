<?php 
  include "includes/header.php"
?>
<?php 
  include "functions.php"
?>

<!--Hero section-->

<section class="hero container-fluid mb-5" >

    <div class="pt-5">
        <div class="pt-5 text-center herotop">
            <h1 style="color:#089D49; text-shadow: 2px 2px #000;">Select Hospital , Find Doctor</h1>
        </div>
        <div class="text-center" >
            <h1 style="color:#089D49; text-shadow: 2px 2px #000;" >Get an appointment</h1>
        </div>
        <div class="text-center btndiv mt-5" >
            <a href="hospital.php"><button class="btn btn-outline-success btn-lg"><b>Appointment </b> </button></a>
        </div>
    </div>


    


</section>



<!--Devider-->

<div class="">
    <br>
</div>





<!--User Status-->

<div class="row hero2 py-4 mt-5">
    <div class="col-sm-4 .col  text-center text-white">
        <h1><?php  echo hospital_count(); ?>+ Hospitals</h1>

    </div>
    <div class="col-sm-4  .col  text-center text-white">
        <h1><?php  echo total_doctor_count(); ?>+ Doctors</h1>

    </div>
    <div class="col-sm-4 .col text-center text-white">

        <h1><?php  echo user_count(); ?>+ Users</h1>
    </div>
</div>





<section class="hero3 container my-5">

    <div class="row">

        <div class="col-md-6 col-12 pt-5">
            <h1>Welcome to our System</h1>
            <p>Our proposed project is an Online Doctor appointment booking system that provides any user or patients to
                booking a doctor’s appointment easily in online. By using our system, you can easily book an appointment
                at any hospital in our country. You will find doctors details according to the hospitals. The patients
                can book an
                appointment in any hospital according to their choice or demands, also get their serial no and
                appointment time You will find doctors details according to the hospital. Hence this system is best
                applicable system for easily find best doctors in
                any hospitals and booking an appointment. </p>
            <button class="btn btn-success">learn More</button>
        </div>
        <div class="col-md-6 col-12 text-center">

            <img src="img/bg-doctor.png" alt="">
        </div>
    </div>

</section>



<!--
<div class="container p-3">



    <a href="dashboards/super_admin_dashboard.php"><button class="btn btn-warning"><b>Super Admin Dasboard</b></button></a>
    <a href="dashboards/admin_dashboard.php"><button class="btn btn-info"><b>Admin Dashboard </b></button></a>
    <a href="dashboards/doctor_dashboard.php"><button class="btn btn-danger"><b>Doctor Dashboard</b></button></a>
    <a href="dashboards/user_dashboard.php"><button class="btn btn-success"><b>User Dashboard</b></button></a>

</div>

-->


<?php 
  include "includes/footer.php"
?>