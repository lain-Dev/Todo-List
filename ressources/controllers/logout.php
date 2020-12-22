<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['adminLoggedIn']);
    unset($_SESSION['particulierLoggedIn']);
    unset($_SESSION['list']);
    header('Location: ../pages/home.php?page=1');
?>