<!DOCTYPE html>

<?php include("../PUBLICS/nav-head.php"); ?>
<div style="height:60px; background-color:#111;"></div>

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
            background-color: #200935 !important;
        }

        .section-form {
            font-size: 102%;
            padding: 5% 0;
            position: relative;
            top: 10%;
            left: 28%;
            width: 40%;
            min-height: 85vh;
            height: auto;
        }

        textarea {
            min-width: 100%;
            max-width: 100%;
            min-height: 200px;
        }

        .form-width {
            width: 90%;
            margin-left: 5%;
        }

        .img-pre {
            display: block;
            width: 100%;
        }

        .img-pre-span {}

    </style>
</head>

<?php
// Include database connection file
include ("../DB/connection.php");
    
if(isset($_POST["update"])) {
    mysqli_query($db,"UPDATE products set  name='" . $_POST['name'] . "', code='" . $_POST['code'] . "' ,price='" . $_POST['price'] . "', image='" . $_POST['image'] . "' WHERE id='" . $_POST['id'] . "'");
}
$result = mysqli_query($db,"SELECT * FROM products WHERE id='" . $_GET['GAMEid'] . "'");
$row= mysqli_fetch_array($result);
?>

<!-- ------------------------------------------------------------------------------ -->



<body>
    <section class="section-form">
        <div class="border">
            <div class="header">
                <h2>ADD GAMES</h2>
                <a href="../admin/view_games.php">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </a>
            </div>

            <form method="post" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" enctype="multipart/form-data">
                <div class="form-width">

                    <div class="input-group">
                        <label>Game Title</label>
                        <input type="text" name="name" value="<?php echo $row["name"]; ?>" required>
                    </div>

                    <div class="input-group">
                        <label>Deatails</label>
                        <textarea name="code" placeholder="details" required><?php echo $row["code"]; ?></textarea>
                    </div>
                    <label>Cover Image</label>
                    <div class="input-file">
                        <div class="img-box-L">
                            <input type="file" name="file" id="file">
                        </div>
                        <div class="img-box-R" id="img-box-R">
                            <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                            <img src='<?php echo '../DB/games/'.$row["image"]; ?>' alt="cover" class="img-pre">
                            <span class="img-pre-span"></span>
                        </div>
                    </div>

                    <div class="input-group">
                        <label>Price (Rs.)</label>
                        <input type="number" name="price" placeholder="Price" value="<?php echo $row["price"]; ?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                    <div class="bton">
                        <button type="submit" class="btn btn_HIGH" name="update">CREATE</button>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <!-- ------------------------------------------------------------------------------------->
    <?php include("../PUBLICS/footer.php"); ?>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        // Image Preview
        const inpFile = document.getElementById("file");
        const previewContainer = document.getElementById("img-box-R");
        const previewImage = previewContainer.querySelector(".img-pre");
        const previewImageAlt = previewContainer.querySelector(".img-pre-span");

        inpFile.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                previewImageAlt.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function() {
                    console.log(this);
                    previewImage.setAttribute("src", this.result);
                });


                reader.readAsDataURL(file);
            } else {
                previewImageAlt.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute("src", "<?php echo '../DB/games/'.$row["image"]; ?>");
            }
        });

    </script>

</body>


</html>
