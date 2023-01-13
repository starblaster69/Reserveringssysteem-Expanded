<?php
    require 'auth.inc.php';
    require_once  'connect.php';

    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $details = $_POST['details'];
    $budget = $_POST['budget'];
    $contractorsInfo = $_POST['contractorsInfo'];
    $comments = $_POST['comments'];
    $lastEdit = $_POST['datetime'];
    $customerId = $_POST['customerId'];

    $sql = sprintf(
        "UPDATE contactentries SET name='%s', adress='%s', tel='%s', email='%s', details='%s', budget='%s', contractorsInfo='%s', comments='%s', lastEdit='%s'
        WHERE id='%s'",
        $conn->real_escape_string($name),
        $conn->real_escape_string($adress),
        $conn->real_escape_string($tel),
        $conn->real_escape_string($email),
        $conn->real_escape_string($details),
        $conn->real_escape_string($budget),
        $conn->real_escape_string($contractorsInfo),
        $conn->real_escape_string($comments),
        $conn->real_escape_string($lastEdit),
        $conn->real_escape_string($customerId));
    mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);

    header("Location: appointmentUpdateSuccess.php");