<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
<html lang="en">

<head>
    <title>Contact Us</title>
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
            margin: 0 auto;
            padding: 5% 0;
            width: 80%;
            height: auto;
        }

    </style>
</head>


<!-- ---------------------------------------------------------------------- -->
<header>

</header>
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
            <h2>CONTACTS</h2>
            <a href="../ADMIN/index.php">
                <ion-icon name="return-down-back-outline"></ion-icon>
            </a>
            <a href="../admin/create_user.php">Create Users</a>
            <a href="../admin/view_users.php">View Users</a>
            <a href="../admin/add_games.php">Add Games</a>
            <a href="../admin/view_games.php">View Games</a>
        </div>

        <div class="view-users">
            <?php
            $query = "SELECT * FROM contacts";
            $result = mysqli_query($db,$query); ?>

            <table border="1" cellspacing="0">
                <tr>
                    <th> No.</th>
                    <th> Name</th>
                    <th> Email</th>
                    <th> Message</th>
                    <th> Date </th>
                </tr>
                <?php
                while ($row=mysqli_fetch_assoc($result)) {
                    $field1 = $row["no"];
                    $field2 = $row["name"];
                    $field3 = $row["email"];
                    $field4 = $row["message"];
                    $field5 = $row["date"];
                ?>
                <tr>
                    <td><?php echo $field1 ?></td>
                    <td><?php echo $field2 ?></td>
                    <td><?php echo $field3 ?></td>
                    <td>
                        <div class="data"><?php echo $field4 ?></div>
                    </td>
                    <td><?php echo $field5 ?></td>
                </tr>
                <?php  } ?>
            </table>
            <?php    $result->free(); ?>


        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>


</html>
