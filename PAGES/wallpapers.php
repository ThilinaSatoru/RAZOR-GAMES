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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/wallpaper.css">
    <style>
        body {
            background-color: #000;
        }

    </style>

</head>


<body>
    <!-- ---------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------ -->

    <div id="container">
        <span onclick="imgHide();" class="closebtn">
            <ion-icon name="close-circle-outline" style="color: red !important;"></ion-icon>
        </span>
        <img id="fullImg">
    </div>



    <section class="">
        <?php include("../SECTIONS/row-of-wall1.php"); ?>
    </section>
    <section class="">
        <?php include("../SECTIONS/row-of-wall2.php"); ?>
    </section>
    <section class="">
        <?php include("../SECTIONS/row-of-wall3.php"); ?>
    </section>
    <section class="">
        <?php include("../SECTIONS/row-of-wall4.php"); ?>
    </section>
    <!-- ------------------------------------------------------------------------------------->

    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript">
        var elem = document.getElementById("container");

        function imgDisplay(img) {
            var fullImg = document.getElementById("fullImg");
            fullImg.src = img.getAttribute("src");
            openFullscreen();
        }

        function openFullscreen() {
            elem.style.display = "flex";
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Chrome, Safari and Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }

        function imgHide() {
            elem.style.display = "none";
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }

    </script>


</body>

</html>
