<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>

<html lang="en">


<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Razor Home</title>
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">
    <style>
        body,
        section {
            background-color: #000;
        }

    </style>
</head>


<body>
    <!-- ---------------------------------------------------------------------- -->
    <header>
        <div class="heading-box">
            <img src="../resource/img/razer.svg">
            <h1 class="row">CORTEX</h1>
            <a href="../PAGES/products.php" class="btn btn_HIGH">SHOP NOW</a>
        </div>
    </header>

    <div class="gradient" style="background-image: url(../resource/img/ghost_recon.jpg);">
    </div>
    <!-- ------------------------------------------------------------------------------ -->
    <section class="sec-light" style="background-image: url(../resource/css/img/odysy.jpg);">
        <div class="row" style="margin: 0 25%;">
            <h2>RAZER CORTEX: GAME BOOSTER</h2>
            <p class="long-text">
                Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.
            </p>
        </div>

        <div class="row" style="margin: 0 25%;">
            <div class="col span_1_of_2" style="padding-left: 30px;">
                <h3>GAME BOOSTER</h3>
                <p>Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.</p>
            </div>
            <div class="col span_1_of_2" style="padding: 0 30px;">
                <h3>GAME BOOSTER</h3>
                <p>Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.</p>
            </div>
        </div>

    </section>


    <section class="sec-dark" style="background-image: url(../resource/img/mortal_kombat_x.jpg); background-position: -400px 50%;">
        <div class="row" style="margin-left:60%;">
            <div class="col span_1_of_2">
                <h2>RAZER CORTEX: GAME BOOSTER</h2>
                <p class="long-text">
                    Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.
                </p>
            </div>
        </div>

    </section>
    <!-- ------------------------------------------------------------------------------------->
    <section class="sec-dark" style="background-image: url(../resource/css/img/Wave.png); ">
        <div class="row" style="margin: 0 25%;">
            <h2>RAZER CORTEX: GAME BOOSTER</h2>
            <p class="long-text">
                Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.
            </p>
        </div>

        <div class="row" style="margin: 0 25%;">
            <div class="col span_1_of_2" style="padding-left: 30px;">
                <h3>GAME BOOSTER</h3>
                <p>Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.</p>
            </div>
            <div class="col span_1_of_2" style="padding: 0 30px;">
                <h3>GAME BOOSTER</h3>
                <p>Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.</p>
            </div>
        </div>

    </section>
    <!-- ------------------------------------------------------------------------------------->

    <section class="">
        <?php include("../SECTIONS/sliderCards-games.php"); ?>
    </section>
    <!-- ------------------------------------------------------------------------------------->
    <section class="sec-dark" style="background-image: url(../resource/img/halo_4_2013.jpg);">
        <div class="row" style="margin: 0 5%;">
            <h2>RAZER CORTEX: GAME BOOSTER</h2>
            <p class="long-text">
                Enjoy higher framerates and faster load times by tuning your PC with our suite of gaming optimization tools.
            </p>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>
    <script src="../resource/js/ScrollPosiSave.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
