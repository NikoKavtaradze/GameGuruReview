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
    <link rel="stylesheet" href="../CSS/Main_Styles.css">
    <!-- /სტილები -->
</head>

<body>
    <!-- ჰედერი --><?php include "../components/header/header.php";?><!-- /ჰედერი -->
    <main>
        <?php
            if (isset($_SESSION['userID']) && isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "Welcome, " . htmlspecialchars($username) . "!";
            } else {
                echo "You are not logged in.";
            }
            ?>
        ?>
    </main>

    <!-- ფუტერი --><?php include "../components/footer/footer.php";?><!-- /ფუტერი -->

    <!-- სკრიპტი --> <script src="../JavaScript/script.js"></script><!--/სკრიპტი -->
</body>
</html>