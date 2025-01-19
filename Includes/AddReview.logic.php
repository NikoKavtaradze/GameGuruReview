<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $userId = $_SESSION['userID'];
    $reviewTitle = htmlspecialchars($_POST['Review-title']);
    $reviewText = htmlspecialchars($_POST['Review-text']);
    $photoPath = null;

    require_once "Functions.inc.php";
    require_once "Database.inc.php";
    
    if (isset($_FILES['Review_photo']) && $_FILES['Review_photo']['error'] === 0) {
        $uploadDir = '../uploads/';
        $fileName = uniqid() . '-' . basename($_FILES['Review_photo']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['Review_photo']['tmp_name'], $targetPath)) {
            $photoPath = $targetPath;
        } else {
            header("location: ../site/AddReviewForm.php?error=uploadFailed");
            exit();
        }
    }

    createReviewPost($conn, $userId, $reviewTitle, $reviewText, $photoPath);
}
