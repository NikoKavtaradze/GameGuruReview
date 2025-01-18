<?php
    if(isset($_POST['LogoutButton'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../Site/MainPage.php?status=loggedOut");
        exit();
    }
?>