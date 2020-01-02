<?php
   include("connection.php");
   session_start();
   
   $cmd = $_REQUEST['cmd'];
   
   
   switch($cmd){
	   case "login":
	               $email = $_REQUEST['email'];
				   $password = $_REQUEST['password'];
				   $sql = "SELECT * from users WHERE email='".$email."' AND password='".$password."'";
				   $result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						$arr = array();
						$i = 0;
						while($data = mysqli_fetch_assoc($result)) {
							while(list($key,$value) = each($data))
								$arr[$i][$key] = $value;
							$i++;
						}
					  }
				 if(count($arr)>0)
				 {
					  $_SESSION['email'] = $_REQUEST['email'];
					  $_SESSION['id'] = $arr[0]['id'];
					//$str = "Login successfully"; 
					Header("Location:success.php");
				 }
				 else
				 {
					$str = "Login fail";  
				 }
				include("login_form.php");   	  
				
	        break;
	   case "register":
	            $first_name = $_REQUEST['first_name'];
				$last_name  = $_REQUEST['last_name'];
				$email = $_REQUEST['email'];
				$password = $_REQUEST['password'];
				
				$sql = "INSERT INTO users (first_name,last_name,email,password) VALUES('$first_name','$last_name','$email','$password')";
	            $result = $conn->query($sql);
				if($result)
				{
					 $str =  "Registration has been completed successfully";
				}
				else{
					$str = "Registration fail";
				}
	            include("register_form.php");    
	         break;
	  case "show_register":	
	         include("register_form.php");    
	         break;	   
	 case "logout":
	         session_destroy();
			 include("login_form.php");   
			 break;
	     		 
	  default:
	  
	       include("login_form.php");   
   }



 


?>