

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
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/login.css">
    
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
          
          <a href="login.php"><button class="btn btn-outline-success"><b>Log In/Register</b></button></a>
        </li>
        
        </div>
      </ul>
    </div>
  </div>
</nav>

</section>



<div class="row mt-5">	
	<div class="col-6"></div>
	<div class="col-6">

			<a href="doctors_login.php"><button class="btn btn-outline-success mx-1">Doctors_login</button></a>
			<a href="admins_login.php"><button class="btn btn-outline-success mx-1">Admins_login</button></a>
			<a href="superadmin_login.php"><button class="btn btn-outline-success mx-1">Superadmin_login</button></a>
	</div>
	

</div>




<img class="wave" src="../img/wave.png">
	<div class="container mt-5">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">

			<form action="../database/test_login_verification.php" method="post">
				<img src="../img/avatar.svg" class="avatar">
				<h2 class="title">Users login </h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="email">
           		   </div>
           		</div>

           		<div class="input-div two">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>


           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
				   </div>

				   <div class=" three">
           		   <div class="i"> 

                      
           		    
           		   </div>

                   <div class="div">
           		    	
                   <div class="input-div three">
           		   <div class="i"> 
           		    	<i class="fas fa-users"></i>
           		   </div>

                   <div class="div">
           		    	<h5>Select : </h5>
           		    	<select name="role" id="">
                               <option value="user">User</option>
                               <option value="doctor">Doctor</option>
                               <option value="admin">Admin</option>
							   <option value="superadmin">Super-Admin</option>
                           </select>
            	  

					</div>

            	  

					</div>
            	</div>
				<div class="row">
					<div class="left col-6">
					<a href="test_users_sign_up.php">Registation Now</a>
            	
					</div>
					<div class="right col-6">
					<a href="#">Forgot Password?</a>
					</div>
				</div>
            	<div class="mt-3">
				<input type="submit" name = "submit" class="btn btn-success" value="Login">
				</div>
            </form>
        </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	
</body>
</html>