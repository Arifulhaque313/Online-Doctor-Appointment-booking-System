<?php 

    function hospital_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $hospital_count = "";
        $query = "select count(*) as hospital_count from hospital";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$hospital_count = $row['hospital_count'];
		}
		return($hospital_count);

    }


    function total_doctor_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $doctor_count = "";
        $query = "select count(*) as doctor_count from testusers where role = 'doctor'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$doctor_count = $row['doctor_count'];
		}
		return($doctor_count);
    }


    
    function total_admin_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $doctor_count = "";
        $query = "select count(*) as admin_count from testusers where role = 'admin'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$admin_count = $row['admin_count'];
		}
		return($admin_count);
    }


    
    function user_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $user_count = "";
        $query = "select count(*) as user_count from testusers ";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
    }




    function show_hospital_id(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }
        
        $query = "select * from hospital";
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
        
       
        echo" <option value ='$id'>$id</option>";

        }
    }



    function show_admin_id(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }
        
        $query = "select * from testusers where role = 'admin'";
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
        
       
        echo" <option value ='$id'>$id</option>";

        }
    }



    


    function show_hospital_name(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }
        
        $query = "select * from hospital";
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_assoc($result)){
            $hname = $row['hname'];
        
       
        echo" <option value ='$hname'>$hname</option>";

        }
    }


    
    function show_doctor_id(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }
        
        $h_name = $_SESSION['hospital'];
        $query= "select * from testusers where role = 'doctor' AND hospital = '$h_name'";
        $result =mysqli_query($link,$query);
       
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
        
       
        echo" <option value ='$id'>$id</option>";

        }
    }





    function image_verification(){

        if($_SESSION['image']){
            return $_SESSION['image'];
    
        }
        else{
    
            
            return "../img/avatar.svg";
        }
    }



    function user_appointment_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $user_id = $_SESSION['id'] ;
        $user_count = "";
        $query = "select count(*) as user_appointment_count from appointments where pid ='$user_id'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_appointment_count = $row['user_appointment_count'];
		}
		return($user_appointment_count);
    }



    function doctor_appointment_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $user_id = $_SESSION['id'] ;
        $user_count = "";
        $query = "select count(*) as user_appointment_count from appointments where docid ='$user_id'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_appointment_count = $row['user_appointment_count'];
		}
		return($user_appointment_count);
    }



    function todays_doctor_appointment_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $user_id = $_SESSION['id'] ;
        $p_date = date("d-m-Y");
        $user_count = "";

        $query = "select count(*) as user_appointment_count from appointments where docid ='$user_id' AND appdate = '$p_date'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_appointment_count = $row['user_appointment_count'];
		}
		return($user_appointment_count);
    }




    function admin_appointment_count(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }

        $apphospital = $_SESSION['hospital'] ;
        $user_count = "";
        $query = "select count(*) as user_appointment_count from appointments where apphospital ='$apphospital'";
		$query_run = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_appointment_count = $row['user_appointment_count'];
		}
		return($user_appointment_count);
    }




    
    function get_current_serial(){
        $link = mysqli_connect("localhost","root","","odabs");
        if(mysqli_connect_error()){
            die ("Connection Failed");
        }
        
        $user_id = $_SESSION['id'] ;
        $p_date = date("d-m-Y");
        $query = "select * from appointments where docid = $user_id AND appdate = '$p_date'";
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_assoc($result)){
            $cserial = $row['cserial'];
        
       
        }
        echo" $cserial";
    }



?>