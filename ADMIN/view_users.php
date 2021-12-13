<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>

<html lang="en">

<head>
    <title>Admin-Users</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-color: #200935 !important;
        }

        .section-table {
            margin: 5% auto;
            padding: 1%;

            width: 70%;
            height: auto;
        }

    </style>
</head>

<!-- ------------------------------------------------------------------------------ -->
<?php 

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
    header('location: ../pages/login.php');
}
    if (!isAdmin()) {
	$_SESSION['msg'] = "autherized for admins only";
    header('location: ../pages/login.php');
}
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../pages/login.php");
    }
?>


<body>
    <section class="section-table">
        <div class="header">
            <h2>USERS</h2>
            <a href="../ADMIN/index.php">
                <ion-icon name="return-down-back-outline"></ion-icon>
            </a>
            <a href="../admin/create_user.php">Create Users</a>
            <a href="../admin/add_games.php">Add Games</a>
            <a href="../admin/view_games.php">View Games</a>
            <a href="../admin/contacts.php">Contacts</a>
        </div>

        <div class="view-users">
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($db,$query);
            ?>
            <table border="1" cellspacing="1">
                <tr>
                    <th> User Id</th>
                    <th> Email</th>
                    <th> User Type</th>
                    <th> Password</th>
                </tr>
                <?php
                while ($row=mysqli_fetch_assoc($result)) {
                    $field1 = $row["userid"];
                    $field2 = $row["email"];
                    $field3 = $row["user_type"];
                    $field4 = $row["password"];
               ?>
                <tr>
                    <td width="10%"><?php echo $field1 ; ?></td>
                    <td width="20%"><?php echo $field2 ; ?></td>
                    <td width="10%"><?php echo $field3 ; ?></td>
                    <td width="40%"><?php echo $field4 ; ?></td>
                </tr>
                <?php  } ?>
            </table>
            <?php  $result->free();?>


        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>


</html>
