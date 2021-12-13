<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
<html lang="en">

<head>
    <title>Web App Full</title>
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
            font-size: 102%;
            padding: 10% 0;
            position: relative;
            top: 10%;
            left: 28%;
            width: 40%;
            min-height: 85vh;
            height: auto;
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 200px;
        }

        .form-width {
            width: 90%;
            margin-left: 5%;
        }

        .img-pre {
            display: block;
            width: 100%;
        }

        .img-pre-span {}

    </style>
</head>


<!-- ---------------------------------------------------------------------- -->
<header>

</header>
<!-- ------------------------------------------------------------------------------ -->



<body>
    <section class="section-form">
        <div class="border">
            <div class="header">
                <h2>ADD GAMES</h2>
                <a href="../admin/view_games.php">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </a>
            </div>
            <div class="content">
                <?php
                // Include database connection file
                include ("../DB/connection.php");   
                mysqli_query($db,"DELETE FROM products WHERE id='" . $_GET['GAMEid'] . "'");
                echo 'Game deleted!';
                ?>
            </div>
        </div>

    </section>

    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>


</html>
