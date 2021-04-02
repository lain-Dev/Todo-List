<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['role']);
    unset($_SESSION['id_utilisateur']);
    header("Location: ../vue/home.php");
?>