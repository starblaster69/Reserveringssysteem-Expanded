<?php

    session_start();
    require_once 'connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = sprintf(
        "SELECT * FROM users WHERE email='%s'",
        $conn->real_escape_string($email));

    $result = $conn->query($sql);
    $row = $result->fetch_object();
    if ($row != null) {
        $hash = $row->hash;
        if (password_verify($password, $hash)){
            $_SESSION['email'] = $row->email;
            $_SESSION['isAdmin'] = $row->isAdmin;
            header("Location: appointmentInbox.php");
        } else {
            header("Location: login.php");
        }
    } else {
        header("Location: login.php");
    }
