<?php
function contact()
{
    global $db, $errors, $username, $email;
        
        $name   =  e($_POST['Name']);
        $Email   =  e($_POST['Email']);
        $message  =  e($_POST['Message']);
        $date = date("Y-m-d H:i:s"); // date-time now

        $contac = "INSERT INTO contacts (name, email, message, date) VALUES('$name', '$Email', '$message', '$date')";
        mysqli_query($db, $contac);
}
if (isset($_POST['contact'])) 
    {
        contact();
    }
?>
