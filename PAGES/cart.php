<!DOCTYPE html>


<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;">
</div>
<!-- ---------------------------------------------------------------------- -->
<?php
    $status="";

    if (isset($_POST['action']) && $_POST['action']=="remove"){
    if(!empty($_SESSION["shopping_cart"])) {
        foreach($_SESSION["shopping_cart"] as $key => $value) {
          if($_POST["code"] == $key){
              unset($_SESSION["shopping_cart"][$key]);
          }
          if(empty($_SESSION["shopping_cart"]))
            unset($_SESSION["shopping_cart"]);
          } 
    }
    }
    if (isset($_POST['action']) && $_POST['action']=="change"){
      foreach($_SESSION["shopping_cart"] as &$value){
        if($value['code'] === $_POST["code"]){
            $value['quantity'] = $_POST["quantity"];
            break; // Stop the loop after we've found the product
        }
    }
    }
    ?>
<!-- ---------------------------------------------------------------------- -->


<html lang="en">

<head>
    <title>Web App Full</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-color: #200935;
        }

        body {
            border-top: 1px solid #222;

        }

        .section-cart {
            font-size: 101%;
            padding: 0% 0;
            margin: 5% auto;
            width: 70%;
            height: auto;
        }

        .noback {
            background-color: rgba(0, 0, 0, 0) !important;
            padding: 2%;
        }

    </style>
</head>
<header>

</header>

<body>
    <!-- ---------------------------------------------------------------------- -->
    <section class="section-cart">
        <div class="cart">
            <?php
            if(isset($_SESSION["shopping_cart"])){
                $total_price = 0;
            ?>

            <table class="table">
                <tbody>
                    <tr>
                        <th class="noback"></th>
                        <th class="noback">
                            <h3>ITEM NAME</h3>
                        </th>
                        <th class="noback">
                            <h3>QUANTITY</h3>
                        </th>
                        <th class="noback">
                            <h3>UNIT PRICE</h3>
                        </th>
                        <th class="noback">
                            <h3>ITEMS TOTAL</h3>
                        </th>
                    </tr>

                    <?php 
                    $_SESSION['cart'] = array();
                    foreach ($_SESSION["shopping_cart"] as $product){
                    ?>
                    <!-------------------------------------------------------------------------------->
                    <tr class=" t-row">
                        <th>
                            <img src='<?php echo '../DB/games/'.$product["image"]; ?>' width="100" height="auto" />
                        </th>
                        <td>
                            <div class="data" style="min-width: 400px !important;">
                                <h4><?php echo $product["name"]; ?></h4><br />
                                <form method='post' action='' id="">
                                    <input type='hidden' name='code' value="<?php echo $product["code"];?>" />
                                    <input type='hidden' name='action' value="remove" />
                                    <button type='submit' class='remove'>Remove Item</button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="data">
                                <form method='post' action=''>
                                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                    <input type='hidden' name='action' value="change" />
                                    <select name='quantity' class='quantity' onChange="this.form.submit();">
                                        <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                        <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                        <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                        <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                        <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                    </select>
                                </form>
                            </div>
                        </td>

                        <td>
                            <div class="data">
                                <?php echo "Rs.".$product["price"]; ?>
                            </div>
                        </td>

                        <td>
                            <div class="data"><?php echo "Rs.".$product["price"]*$product["quantity"]; ?>
                            </div>
                        </td>
                    </tr>

                    <?php
                        $total_price += ($product["price"]*$product["quantity"]);
                  //-------------------------------------------------------------------------------->
                        $b = array("product"=>$product["name"] ,"quantity"=>$product["quantity"] , "price"=>$product["price"]);         
                        array_push($_SESSION['cart'],$b); // Items added to cart
                        //-------------------------------------------------------------------------------->
                    }//end foreach
                
                        
                $_SESSION['total']=$total_price;
                    ?>
                    <tr>
                        <th colspan="5" align="right" class="noback">
                            <strong>TOTAL :&nbsp;&nbsp;&nbsp;<h4 id="total"><?php echo "Rs.".$total_price; ?></h4> </strong>
                        </th>
                    </tr>
                </tbody>
            </table>

            <div class="proceed">
                <a href='../pages/products.php' class='btn btn_LOW'>SHOP MORE</a>
                <a href='../FUNCTIONS/payAddress.php?a=$total_price' class='btn btn_HIGH'>CHECKOUT</a>
            </div>

            <?php
            }
            else
            {
                echo "
                <div class='cart-empty'>
                <h3>Your cart is empty!</h3>
                <a href='../pages/products.php' class='btn btn_HIGH'>SHOP NOW</a>
                </div>
                " ;
             }
            ?>
        </div>
        <div style="clear:both;"></div>

        <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------->

    <?php include("../PUBLICS/footer.php"); ?>

    <!-- save scroll position of page -->
    <script src="../resource/js/ScrollPosiSave.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>


</html>
