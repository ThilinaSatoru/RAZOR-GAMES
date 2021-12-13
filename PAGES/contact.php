<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title><?php ?></title>
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-image: url(../resource/img/RazerWall.png);
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 200px;
        }

        .section-cart {
            font-size: 101%;
            padding: 10% 0;
            position: relative;
            top: 10%;
            left: 25%;
            width: 50%;
            min-height: 84vh;
            height: auto;
        }

    </style>
</head>

<body>
    <!-- ---------------------------------------------------------------------- -->
    <header>
    </header>

    <div class="section-cart">

        <form action="contact.php" method="POST">
            <h2>Contact Us</h2>
            <label>Name</label>
            <input name="Name" type="text" required>
            <label>Email</label>
            <input name="Email" type="email" required>
            <label>Message</label>
            <textarea name="Message" required></textarea>
            <div class="row">
                <a><input type="submit" name="contact" value="SEND MESSAGE"></a>
            </div>
        </form>
    </div>
    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
