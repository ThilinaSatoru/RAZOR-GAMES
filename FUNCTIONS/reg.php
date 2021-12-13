<?php
// call the register() function if register btn is clicked
if (isset($_POST['register'])) 
{

    $username = $_POST['userid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_u = "SELECT * FROM users WHERE userid='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0)
    {
      $name_error = "User ID already taken"; 	
    }
    else if(mysqli_num_rows($res_e) > 0)
    {
      $email_error = "Account exists with this Email"; 	
    }
    else{
         register();
    }
}
// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['userid']);
	$email       =  e($_POST['email']);
	$password  =  e($_POST['password']);


	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) 
        {//admin
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (userid, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "user successfully created!!";
			header('location: ../admin/index.php');
		}
        else//user
        {
			$query = "INSERT INTO users (userid, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);
            
            if($query){
                // get id of the created user
			header('location: ../pages/login.php');
            }
            
							
		}
	}
}
?>
