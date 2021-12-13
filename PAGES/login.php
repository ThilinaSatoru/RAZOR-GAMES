<!DOCTYPE html>
<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>
<html lang="en">

<head>
    <title>Web App Full</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/3cols.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-image: url(../resource/img/RazerWall.png);
            z-index: 3;
        }

    </style>
</head>

<!-- ---------------------------------------------------------------------- -->

<body>

    <section class="section-form">
        <div class="row">
            <h3>Login Form</h3>
        </div>
        <div class="row">
            <form method="post" action="login.php" class="contact-form">
                <?php echo display_error(); ?>
                <div class="row">
                    <input type="text" name="userid" id="userid" placeholder="Razor ID" value="<?php echo $username; ?>" required>
                </div>
                <div class="row wrpp">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <span class="eye">
                        <ion-icon id="eye-pass" name="eye-sharp"></ion-icon>
                    </span>
                </div>
                <div class="row">
                    <input type="submit" name="login" id="submit" value="LOG IN">
                </div>
                <div class="row">
                    <a href="register.php"><input type="button" name="create" id="create" value="CREATE A NEW ACCOUNT"></a>
                </div>
            </form>
        </div>
    </section>


    <section class=""></section>
    <div class="empty"></div>
    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
<script>
    const togglePassword = document.querySelector('#eye-pass');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {

        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // toggle the eye slash icon
        if (togglePassword.name != "eye-sharp") {
            togglePassword.name = 'eye-sharp';
            togglePassword.style = "color: #555 !important;"
        } else {
            togglePassword.name = 'eye-off-sharp';
            togglePassword.style = "color: white !important;"
        }

    });

</script>

</html>
