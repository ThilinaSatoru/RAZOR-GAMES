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
if(isset($_POST['address'])){
    
    $_SESSION['addr'] = array();
    $b = array("fname"=>$_POST["fname"] ,"lname"=>$_POST["lname"] , "tel"=>$_POST["tel"], "address"=>$_POST["addr"], "city"=>$_POST["city"], "p-code"=>$_POST["p-code"]);  
    array_push($_SESSION['addr'],$b); // Items added to cart
}else{
    echo 'no address <br>';
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
            border-top: 1px #222;
        }

        form {
            background-color: #222;
        }

        .section-ship {
            padding: 20px;
            display: inline-block;
            font-size: 101%;
            margin: 10% 10% 13% 15%;
            width: 30%;
            height: auto;
            background-color: #222;
            border: 1px solid #fff;
        }

        .row {
            clear: both;
            padding: 20px 0;
            margin-bottom: 40px;
            height: auto;
        }

        .col input {
            border: 1px solid #0F0;
            padding: 5px;
            font-size: 26px !important;
            display: inline-block;
            margin: 0 5px;

            cursor: pointer;
        }

        /* When the radio button is checked, add a blue background */
        .col input:checked~.checkmark {
            background-color: #2196F3;
        }

        .leftcol {
            float: left;
            text-align: left;
            display: inline-block;
        }

        .leftcol h4 {
            margin-left: 10px;
        }

        .rightcol {
            float: right;
            text-align: right;
            display: inline-block;
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
    <section class="section-ship">
        <form action="../FUNCTIONS/payment.php" method="post">
            <div class="row">
                <div class="col leftcol">
                    <input type="radio" value="free" name="ship" checked>
                </div>
                <div class="col leftcol">
                    <h4>STANDARD SHIPPING</h4>
                </div>
                <div class="col rightcol">
                    <h4>Free</h4>
                </div>
            </div>


            <div class="row">
                <div class="col leftcol">
                    <input type="radio" value="paid" name="ship">
                </div>
                <div class="col leftcol">
                    <h4>EXPRESS SHIPPING</h4>
                </div>
                <div class="col rightcol">
                    <h4>Rs. 1000.00</h4>
                </div>
            </div>
            <div class="bton">
                <!----------------------------------------------------------->
                <button type="submit" class="btn btn_HIGH" name="shipping">CONTINUE TO FINAL STEP</button>
            </div>
        </form>
    </section>

    <section class="section-detail">
        <h3 style="color:#FFF;">Your Cart</h3><br>

        <?php
        $n = sizeof($_SESSION['cart']);
        for($x = 0; $x < $n; $x++)
        { ?>
        <div class="row">
            <div class="col leftcol">
                <?php echo '<h4>'.$_SESSION['cart'][$x]['product'].'</h4>'; ?>
            </div>

            <div class="col rightcol">
                <?php echo '<h4 style="color:rgb(198, 198, 198);">'.$_SESSION['cart'][$x]['price'].'</h4>'; ?>
            </div>

            <div class="col rightcol" style="padding: 0 8px;">
                <?php echo ' <h4 style="color:#e6e6e6;">Qty.['.$_SESSION['cart'][$x]['quantity'].']</h4>'; ?>
            </div>
        </div>
        <?php } ?>

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
