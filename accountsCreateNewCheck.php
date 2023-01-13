<?php
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (isset($email) && isset($password)) {
        $sql = sprintf(
            "INSERT INTO users (email, hash) VALUES ('%s', '%s')",
            $conn->real_escape_string($email),
            $conn->real_escape_string($hash));
        mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);
        header("Location: accountsmanagement.php"); //change this, to display a success message
    } else { header("Location: accountsCreateNew.php");} //include error message
