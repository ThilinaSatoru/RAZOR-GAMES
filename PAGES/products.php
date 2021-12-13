<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
<html lang="en">

<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.cs">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #000;
        }

    </style>
</head>


<body>
    <header>

        <div class="heading-box" style="">
            <img src="../resource/img/razer.svg">
            <h1 class="row">GAMES</h1>
        </div>
    </header>
    <!------------------------------------------------------------------------ -->
    <section class="gradient" style="background-image: url(../resource/img/hitman_absolution.jpg); background-position: 50% 50%;"></section>
    <!-------------------------------------------------------------------------------- -->
    <?php
    $res = mysqli_query($db,"SELECT * FROM `products`");
    $num_rows = mysqli_num_rows($res);
    $count = 0; 
    
    while($count < $num_rows) {
      include("../SECTIONS/Cart-Cards-5.php");
      $count = $count + 5;
    } 
    ?>
    <!--------------------------------------------------------------------------------------->
    <section class="gradient" style="background-image: url(../resource/img/halo_infinite_2020.jpg); background-position: 0% 20%;">
    </section>
    <!--------------------------------------------------------------------------------------->
    <section class="back-cards">
        <?php include("../SECTIONS/row-of-4-cards.php"); ?>
    </section>

    <section class="gradient" style="background-image: url(../resource/img/origin8.jpg); background-position: 0% 50%;">
    </section>
    <!--------------------------------------------------------------------------------------->
    <?php include_once("../PUBLICS/footer.php"); ?>
    <!-- save scroll position of page -->
    <script src="../resource/js/ScrollPosiSave.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>
