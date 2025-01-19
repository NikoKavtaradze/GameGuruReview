<?php
    if(isset($_POST['LogoutButton'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../Site/index.php?status=loggedOut");
        exit();
    }
?>