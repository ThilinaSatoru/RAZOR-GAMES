<?php 
  $db = mysqli_connect('localhost', 'root', '', 'razor');
  $username = "";
  $email = "";

  if (isset($_POST['register'])) {

  	$username = $_POST['userid'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$sql_u = "SELECT * FROM users WHERE userid='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "User ID already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Account exists with this Email"; 	
  	}else{
           
  	}
  }



  /*$query = "INSERT INTO users (userid, email, password) 
  VALUES ('$username', '$email', '".md5($password)."')";
  $results = mysqli_query($db, $query);
  if($results)
  {
   echo 'Saved!';
   header("Location:login.php");
   ob_end_flush();
  }
  else
  {
     die("failed,".mysqli_error($db)) ;
  }*/
?>
