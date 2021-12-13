<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>

<html lang="en">

<head>
    <title>Admin-Delete Games</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

    <link rel="stylesheet" type="text/css" href="../resource/css/cart.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/sections.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        html {
            background-color: #200935 !important;
        }

        .section-cart {
            font-size: 101%;
            padding: 5% 0;
            position: relative;
            top: 10%;
            left: 12%;
            width: 74%;
            min-height: 84vh;
            height: auto;
        }

        .header {
            width: 100%;
            color: #fff;
            background: #252525;
            text-align: center;
            border: 1px solid #000;
            padding: 20px;
        }

        .header a {
            color: #D0D0D0;
            padding: 0 12px;
            text-decoration: none;
        }

        .header a:hover {
            text-decoration: underline;
            color: #fff;
        }

    </style>
</head>

<body>

    <!-- ---------------------------------------------------------------------- -->
    <section class="section-cart">
        <div class="header">
            <h2>ADMIN USER Page</h2>
            <a href="../ADMIN/index.php">
                <ion-icon name="return-down-back-outline"></ion-icon>
            </a>
            <a href="../admin/create_user.php">Create Users</a>
            <a href="../admin/view_users.php">View Users</a>
            <a href="../admin/add_games.php">Add Games</a>
            <a href="../admin/contacts.php">Contacts</a>
        </div>
        <div class="cart">
            <table class="table">
                <tbody>
                    <tr class="bd">
                        <th></th>
                        <th>
                            <h3>ITEM NAME</h3>
                        </th>
                        <th>
                            <h3>CODE</h3>
                        </th>
                        <th>
                            <h3>UNIT PRICE</h3>
                        </th>
                    </tr>
                    <!-------------------------------------------------------------------------------->
                    <?php 
                        $result = mysqli_query($db,"SELECT * FROM `products`");
                        while($product = mysqli_fetch_assoc($result)){
                    ?>
                    <!-------------------------------------------------------------------------------->
                    <tr class="t-row">
                        <th>
                            <img src='<?php echo '../DB/games/'.$product["image"]; ?>' width="100" height="auto" />
                        </th>
                        <td>
                            <div class="data" style="min-width: 200px !important;">
                                <h4><?php echo $product["name"]; ?></h4><br />
                                <form method='post' action='update_games.php' id="">
                                    <input type="hidden" name="code">
                                </form>
                                <a href="../ADMIN/update-game.php?GAMEid=<?php echo $product["id"]; ?>" type='submit' name="update" style="color:#0f0;" id="update">update</a>
                                <a href="../ADMIN/delete_game.php?GAMEid=<?php echo $product["id"]; ?>" type='submit' name="delete" style="color:red;" id="delete">delete</a>
                            </div>
                        </td>
                        <td>
                            <div class="data">
                                <?php echo $product["code"]; ?>
                            </div>
                        </td>
                        <td>
                            <div class="data" style="padding:0 10px;">
                                <?php echo "Rs.".$product["price"]; ?>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

        <div style="clear:both;"></div>
        <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
        </div>
    </section>

    <?php
    if(isset($_POST['delete'])){
        
        $title = $_POST["title"];
        $detail = $_POST["Details"];
        $price = $_POST["price"];
        
        $query = "INSERT into products (name,code,price,image) VALUES ('$title', '$detail', '$price', '$fileName');" ;
        mysqli_query($db, $query);
    }
?>
    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>

    <!-- save scroll position of page -->
    <script type="text/javascript">
        window.onbeforeunload = function() {
            var scrollPos;
            if (typeof window.pageYOffset != 'undefined') {
                scrollPos = window.pageYOffset;
            } else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
                scrollPos = document.documentElement.scrollTop;
            } else if (typeof document.body != 'undefined') {
                scrollPos = document.body.scrollTop;
            }
            document.cookie = "scrollTop=" + scrollPos + "URL=" + window.location.href;
        }

        window.onload = function() {
            if (document.cookie.includes(window.location.href)) {
                if (document.cookie.match(/scrollTop=([^;]+)(;|$)/) != null) {
                    var arr = document.cookie.match(/scrollTop=([^;]+)(;|$)/);
                    document.documentElement.scrollTop = parseInt(arr[1]);
                    document.body.scrollTop = parseInt(arr[1]);
                }
            }
        }

    </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>
