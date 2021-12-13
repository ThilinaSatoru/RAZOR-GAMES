<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>

<?php   
    // get no of products in cart
    $n = sizeof($_SESSION['cart']);
    //payment POST
    if(isset($_POST['shipping']))

    {                
        $_SESSION["radio"] = $_POST["ship"];
    }

        if(isset($_POST['pay']))
        {
        //get address session multi_Dimensional array
        $a = $_SESSION["addr"][0]['fname'];
        $b = $_SESSION["addr"][0]['lname'];
        $c = $_SESSION["addr"][0]['tel'];
        $d = $_SESSION["addr"][0]['address'];
        $e = $_SESSION["addr"][0]['city'];
        $f = $_SESSION["addr"][0]['p-code'];

        // get last id in sales
        $last = mysqli_query($db,"SELECT * FROM sales ORDER BY id DESC LIMIT 1;");
        while($row = mysqli_fetch_assoc($last)){
            $saleNo = $row['id'] + 2;

        }
        //email
        $mail = $_SESSION['user']['email'];
        // get cart details
        $card_No = $_POST["credit-number"];
        //shipping
        $radioVal=$_SESSION["radio"];
        //get date now()
        $date = date("Y-m-d H:i:s");             

        //loop
        for($x = 0; $x < $n; $x++)
        {

        $pro = $_SESSION['cart'][$x]['product'];
        $qty = $_SESSION['cart'][$x]['quantity'];
        $pri = $_SESSION['cart'][$x]['price'];

        $last = "INSERT into sales (sale_id,email,fname,lname,tel,address,city,postal, ship_type,card_no,date,prodruct,quantity,price) VALUES($saleNo,'$mail','$a','$b','$c','$d','$e',$f,'$radioVal','$card_No','$date','$pro',$qty,$pri); ";
            mysqli_query($db,$last);
            
            if($last)
            {
                echo "<script> alert('payment successfull!'); </script>";
            }
        }
        }
?>


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

        .section-pay {
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


<body>
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

    <section class="section-pay">
        <div class="header">
            <h2>ADMIN USER Page</h2>
            <a href="../PAGES/cart.php">
                <ion-icon name="return-down-back-outline">&#9679;</ion-icon>
                Go Back
            </a>
        </div>
        <form method="post" action="payment.php">
            <div class="form-width">
                <div class="input-group row" id="cc-img">
                    <label>We Accept</label>
                    <img src="https://www.merchantequip.com/image/?logos=v|m&height=64" alt="Merchant Equipment Store Credit Card Logos" style="display:block;">
                </div>

                <div class="input-group">
                    <label>Card No.</label>
                    <input name="credit-number" class="cc-number" id="cc-number" type="tel" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                </div>

                <div class="input-group">
                    <label>Date</label><br>
                    <select name='expireMM' id='expireMM'>
                        <option value=''>MM</option>
                        <option value='01'>01</option>
                        <option value='02'>02</option>
                        <option value='03'>03</option>
                        <option value='04'>04</option>
                        <option value='05'>05</option>
                        <option value='06'>06</option>
                        <option value='07'>07</option>
                        <option value='08'>08</option>
                        <option value='09'>09</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                    </select>
                    <select name='expireYY' id='expireYY'>
                        <option value=''>YY</option>
                        <option value='20'>20</option>
                        <option value='21'>21</option>
                        <option value='22'>22</option>
                        <option value='23'>23</option>
                        <option value='24'>24</option>
                    </select>
                    <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4" />
                </div>

                <div class="input-group">
                    <label>CVC</label><br>
                    <input name="credit-cvc" class="cc-cvc" type="tel" pattern="\d*" maxlength="3" placeholder="CVC"> 3 digits on the back of the card
                </div>

                <div class="bton">
                    <button type="submit" class="btn btn_HIGH" name="pay">PAY NOW</button>
                </div>
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
    <script>
        document.getElementById('cc-number').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
        });

    </script>

</body>


</html>
