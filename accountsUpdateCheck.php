<?php
require 'auth.inc.php';
require_once  'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];
$newPassword = $_POST['newPassword'];

    $sql = sprintf(
        "SELECT * FROM users WHERE email='%s'",
        $conn->real_escape_string($email));

    $result = $conn->query($sql);
    $row = $result->fetch_object();
    if ($row != null) {
        $hash = $row->hash;
        if (password_verify($password, $hash)){
            $sql = sprintf(
                "UPDATE users SET email='%s', password='%s'
        WHERE password='%s'",
                $conn->real_escape_string($email),
                $conn->real_escape_string($newPassword),
                $conn->real_escape_string($password));
            mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);
            $_SESSION['email'] = $row->email;
            $_SESSION['isAdmin'] = $row->isAdmin;
            header("Location: accountsManagement.php");
        } else {
            header("Location: accountsUpdate.php");
        }
    } else {
        header("Location: accountsUpdate.php");
    }