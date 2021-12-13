<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Driver Booster</title>
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">
    <style>
        body {
            background-color: #000;
        }

        .top-padding {
            padding-top: 90px;
            height: 150px;
            background-color: #111;
            text-align: center;
        }

        .col img {
            position: absolute;
            height: 500px;
            top: 10%;
        }

    </style>
</head>


<body>
    <!-- ---------------------------------------------------------------------- -->
    <header>
        <div class="top-padding">
            <h4>Get better, faster, smoother performance from your PC.</h4>
        </div>


        <!-- ------------------------------------------------------------------------------ -->
        <div class="heading-box">
            <img src="../resource/img/razer.svg">
            <h1 class="row">CORTEX</h1>

            <a href="../PAGES/beta.php" class="btn btn_HIGH">DOWNLOAD NOW </a>
            <p>Windows 10, Windows 8, Windows 7</p>

        </div>
    </header>

    <div class="gradient">
        <video autoplay muted loop id="myVideo">
            <source src="../resource/css/img/Razer%20Cortex%20.mp4" type="video/mp4">
        </video>
    </div>
    <!-- ------------------------------------------------------------------------------ -->
    <section class="sec-dark" style="background-image: url(../resource/img/cube_dark.jpg); ">
        <div class="row" style="margin: 0 5%;">
            <div class="col span_1_of_2" style="margin-left: 8%;">
                <h2>RAZOR CORTEX:SYSTEM BOOSTER</h2>
                <p>Take your PC optimization one step further with a one-stop solution that automatically detect and delete junk files to free up space..</p>
            </div>
            <div class="col span_1_of_2">
                <img src="../resource/img/booster/scan.PNG" style="right:10%;">
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->
    <section class="sec-light" style="background-color:#44D62C;">
        <div class="row" style="margin: 0 5%;">
            <div class="col span_1_of_2" style="margin-left: 110%;">
                <h2 style="color:#000;">RAZOR CORTEX: BOOSTER PRIME</h2>
                <p>Automatically streamline your PC's performance and visuals for supported games, thanks to the advanced AI with a machine-leaning algorith that calculates the best settings based on your preferences.</p>
            </div>
            <div class="col span_1_of_2">
                <img src="../resource/img/booster/boosterprime.PNG" style="left:10%;">
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->
    <section class="sec-dark" style="background-image: url(../resource/img/watch_dogs_2_wrench.jpg); background">
        <div class="row" style="margin-left: 8%;">
            <div class="col span_1_of_2">
                <h2>RAZOR CORTEX: GAME BOOSTER</h2>
                <p>Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.</p>
            </div>

            <div class="col span_1_of_2">
                <img src="../resource/img/booster/boost.PNG" style="right:10%;">
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->

    <section class="babk-cards">
        <?php include("../SECTIONS/row-of-4-cards.php"); ?>
    </section>

    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>



    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
