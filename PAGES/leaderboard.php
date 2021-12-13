<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Razor Wallpapers</title>
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/wallpaper.css">
    <style>
        body {
            background-color: #000;
        }

        .heading {
            text-align: center;
        }

        .heading h2 {
            padding: 40px;
        }

    </style>

</head>


<body>
    <!-- ---------------------------------------------------------------------- -->

    <div style="min-height:60px;">

    </div>

    <div class="heading">
        <h2>leaders guided us to the SUCCESS</h2>
    </div>

    <!-- ------------------------------------------------------------------------------ -->

    <div id="container">
        <span onclick="imgHide();" class="closebtn">
            <ion-icon name="close-circle-outline" style="color: red !important;"></ion-icon>
        </span>
        <img id="fullImg">
    </div>



    <section class="back-cards">
        <?php include("../SECTIONS/leaderbord-cards-4.php"); ?>
    </section>


    <section class="gradient" style="background-image: url(../resource/img/); background-position: 0% 50%;">
    </section>

    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>

    <!-- ------------------------------------------------------------------------------------->


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>
