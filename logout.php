<?php

session_start();

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
}

if (isset($_SESSION['isAdmin'])) {
    unset($_SESSION['isAdmin']);
}

header("Location: login.php");