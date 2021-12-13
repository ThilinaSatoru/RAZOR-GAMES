<!DOCTYPE html>



<?php
//include_once("../FUNCTIONS/functions.php");
include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>


<?php 
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
    header('location: ../pages/login.php');
}  
?>




<html lang="en">

<head>
    <title>Web App Full</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/user.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        html {
            background-color: #200935;
        }

        body {
            border-top: 1px solid #222;
        }

        .section-address {
            padding: 10px;
            display: inline-block;
            font-size: 101%;
            margin: 8% 10%;
            width: 40%;
            height: auto;
        }

        select {
            padding: 5px !important;
            font-size: 20px;
            background-color: rgba(0, 0, 0, 0.54);
            color: white;
            margin: 10px 0px;
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 100px;
        }

        .row {
            clear: both;
        }

        .leftcol {
            float: left;
            text-align: left;
        }

        .rightcol {
            float: right;
            text-align: right;
        }

    </style>

</head>

<!-- ------------------------------------------------------------------------------ -->
<div class="shiping_stat">
    <a href="../PAGES/cart.php" id="backtocart">
        <ion-icon name="return-down-back-outline">&#9679;</ion-icon>
        Go Back to Cart
    </a>
    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
    <a href="../FUNCTIONS/payAddress.php">Address</a>
    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
    <a href="../FUNCTIONS/payship.php">Shipping</a>
    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
    <a href="../FUNCTIONS/payment.php">Payment</a>
</div>

<body>
    <section class="section-address">
        <div class="header">
            <h3>Contact Details</h3>
        </div>

        <form method="post" action="../FUNCTIONS/payship.php">
            <div class="form-width">

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="title" value="<?php echo $_SESSION['user']['email'];?>" disabled>
                </div>

                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="fname" value="" placeholder="first name*" required>
                </div>

                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="" placeholder="last name*" required>
                </div>

                <div class="input-group">
                    <label>SL(+94)</label>
                    <input type="TEL" name="tel" value="" placeholder="contact number*" maxlength="10" required>
                </div>

                <div class="input-group">
                    <label>Address</label>
                    <input type="text" name="addr" value="" placeholder="address" required>
                </div>

                <div class="input-group">
                    <label>City</label>
                    <input type="text" name="city" value="" placeholder="city" required>
                </div>

                <div class="input-group">
                    <label>Postal Code</label>
                    <input type="tel" name="p-code" value="" placeholder="Postal Code*" required>
                </div>

                <div class="bton">
                    <!----------------------------------------------------------->
                    <button type="submit" class="btn btn_HIGH" name="address">CREATE</button>
                </div>
            </div>
        </form>
    </section>

    <section class="section-detail">
        <h3 style="color:#FFF;">Your Cart</h3><br>

        <div class="row">
            <div class="col leftcol">
                <?php
                $n = sizeof($_SESSION['cart']);
                for($x = 0; $x < $n; $x++)
                {
                    echo '<h4>'.$_SESSION['cart'][$x]['product'].'</h4>'; 
                }
                ?>
            </div>
            <div class="col rightcol">
                <?php
                $n = sizeof($_SESSION['cart']);
                for($x = 0; $x < $n; $x++)
                {
                    echo '<h4 style="color:rgb(198, 198, 198);">'.$_SESSION['cart'][$x]['price'].'</h4>'; 
                }
                ?>
            </div>
            <div class="col rightcol" style="padding: 0 8px;">
                <?php
                $n = sizeof($_SESSION['cart']);
                for($x = 0; $x < $n; $x++)
                {
                    echo ' <h4 style="color:#e6e6e6;">Qty.['.$_SESSION['cart'][$x]['quantity'].']</h4>'; 
                    
                }
                ?>
            </div>
        </div>
        <div class="row" style="padding: 10px 0;">
            <div class="col leftcol">
                <h3>Total:</h3>
            </div>
            <div class="col rightcol">
                <h3 style="color:#0f0;"><?php echo 'Rs. ' . $_SESSION["total"]; ?></h3>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>


</html>
