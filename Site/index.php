<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameGuruReviews</title>
    <!-- სტილები -->
    <link rel="stylesheet" href="../components/header/style.css">
    <link rel="stylesheet" href="../components/footer/style.css">
    <link rel="stylesheet" href="../components/header/reset.css">
    <link rel="stylesheet" href="../components/slider/slider.css">
    <link rel="stylesheet" href="../components/slider2/slider2.css">
    <link rel="stylesheet" href="../CSS/Main_Styles.css">
    <!-- /სტილები -->
</head>

<body>
    <!-- ჰედერი --><?php include "../components/header/header.php"; ?><!-- /ჰედერი -->
    <main>
        <?php
            if (isset($_SESSION['userID']) && isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<h1 class='helo'>Welcome</h1> " . "<h1 class='helo'>" . htmlspecialchars($username) . "</h1>";
            } else {
                echo "You are not logged in.";
            }
        ?>
        <?php
            require_once '../components/slider/slider.php';
            require_once '../components/slider2/slider2.php';
        ?>

    </main>

    <!-- ფუტერი --><?php include "../components/footer/footer.php"; ?><!-- /ფუტერი -->

    <!-- სკრიპტი -->
    <script src="../JavaScript/script.js"></script><!--/სკრიპტი -->
</body>

</html>