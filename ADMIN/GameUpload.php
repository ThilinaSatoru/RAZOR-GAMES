<?php
// Include the database configuration file
include '../DB/connection.php';
include_once '../FUNCTIONS/functions.php';
$statusMsg = '';



// File upload path
$targetDir = "../DB/games/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["add"]) && !empty($_FILES["file"]["name"]))
{
    $title = e($_POST["title"]);
    $detail = e($_POST["Details"]);
    $price = e($_POST["price"]);
    
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $query = "INSERT into products (name,code,price,image) VALUES ('$title', '$detail', '$price', '$fileName');" ;
            mysqli_query($db, $query);
            if($query){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                $_SESSION['success']  = "user successfully created!!";
			     header('location: ../admin/add_games.php');
            }
            else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
