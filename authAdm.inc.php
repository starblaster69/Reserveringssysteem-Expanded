<?php

session_start();

if (!isset($_SESSION['isAdmin'])) {
        header("Location: login.php");
    } elseif ($_SESSION['isAdmin'] != 1) {
        header("Location: appointmentInbox.php");
    }
?>