<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
<html lang="en">

<head>
    <title>Admin-New User</title>
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

        .section-form {
            font-size: 102%;
            padding: 5% 0;
            position: relative;
            top: 10%;
            left: 28%;
            width: 40%;
            min-height: 85vh;
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
    
?>


<body>
    <section class="section-form">
        <div class="border">
            <div class="header">
                <h2>CREATE USERS</h2>
                <a href="../ADMIN/index.php">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </a>
                <a href="../admin/view_users.php">View Users</a>
                <a href="../admin/add_games.php">Add Games</a>
                <a href="../admin/view_games.php">View Games</a>
                <a href="../admin/contacts.php">Contacts</a>
            </div>

            <form method="post" action="create_user.php" style="margin: 0px auto;  ">

                <?php echo display_error(); ?>

                <div class="input-group">
                    <input type="text" name="userid" value="<?php echo $username; ?>" placeholder="Razor ID">
                </div>
                <div class="input-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email Address">
                </div>
                <div class="input-group">
                    <select name="user_type" id="user_type">
                        <option value="">User type</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="bton">
                    <button type="submit" class="btn btn_HIGH" name="register">CREATE</button>
                </div>
            </form>
        </div>

    </section>

    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>


</html>
