<?php
    require_once 'connect.php';

    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $details = $_POST['details'];
    $budget = $_POST['budget'];
    $lastEdit = $_POST['datetime'];

    $sql = sprintf(
        "INSERT INTO contactentries (name, adress, tel, email, details, budget, lastEdit) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
        $conn->real_escape_string($name),
        $conn->real_escape_string($adress),
        $conn->real_escape_string($tel),
        $conn->real_escape_string($email),
        $conn->real_escape_string($details),
        $conn->real_escape_string($budget),
        $conn->real_escape_string($lastEdit));
    mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);

    header("Location: clientContactSuccess.php");