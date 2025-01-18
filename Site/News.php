<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <!-- სტილები -->
    <link rel="stylesheet" href="../components/header/style.css">
    <link rel="stylesheet" href="../components/footer/style.css">
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/News.css">
    <!-- /სტილები -->
</head>

<body>
    <!-- ჰედერი --><?php include "../components/header/header.php"; ?><!-- /ჰედერი -->
    <main>
        <form id="addReviewBtn" action="" method="POST">
            <button name="addNewReview">
                +
            </button>
        </form>
        <div id="Reviews">
            <?php
            if (isset($_POST['addNewReview'])) {
                if(isset($_SESSION["userID"]) && isset($_SESSION['username'])){
                    require_once "../Includes/AddReview.inc.php";
                    exit();
                }else {
                    echo "<form id='addReviewBtn' action='LogIn.php' method='POST'>
                            <button name='addNewReview'>
                                -
                            </button>
                          </form>";
                }
            } 
            ?>
        </div>


    </main>
    <!-- ფუტერი --><?php include "../components/footer/footer.php"; ?><!-- /ფუტერი -->

    <!-- სკრიპტი -->
    <script src="../JavaScript/script.js"></script><!--/სკრიპტი -->
</body>

</html>


<!-- isset($_SESSION["userID"]) && isset($_SESSION['username']) -->