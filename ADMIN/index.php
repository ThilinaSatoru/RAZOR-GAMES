<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
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


<html lang="en">

<head>
    <title>Admin</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-color: #200935 !important;
        }

        .section-form {
            align-content: center;
            align-items: center;
            align-self: center;
            vertical-align: middle;
            font-size: 101%;
        }

    </style>
</head>


<!-- ---------------------------------------------------------------------- -->

<body>
    <section class="section-form" style="width:55% !important; left:25%;">
        <div class="header">
            <h2>ADMIN USER Page</h2>
            <a href="../PUBLICS/home.php">Home</a>
            <a href="../PAGES/products.php">Products</a>
        </div>

        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
                </h3>
            </div>
            <?php endif ?>
            <!-- logged in user information -->
            <div class="profile_info">
                <img src="../resource/img/photo.jpg" alt="x">

                <div>
                    <?php  if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['userid']; ?></strong>

                    <small>
                        <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                        <br>
                        <a href="../publics/home.php?logout='1'" style="color: red;">logout</a>
                    </small>
                    <?php endif ?>
                </div>
            </div>

            <div class="admin-links">
                <a href="../admin/create_user.php">Create Users</a>
                <a href="../admin/view_users.php">View Users</a>
                <a href="../admin/add_games.php">Add Games</a>
                <a href="../admin/view_games.php">View Games</a>
                <a href="../admin/contacts.php">Contacts</a>
            </div>
        </div>
    </section>

    <section class=""></section>
    <div class="empty"></div>


    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>


</html>
