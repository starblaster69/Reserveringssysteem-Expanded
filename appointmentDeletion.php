<?php
require 'auth.inc.php';
require_once  'connect.php';

$customerId = '';
if(isset($_POST['customerId']) && ctype_digit($_POST['customerId'])) {
    $customerId = $_POST['customerId'];
} else {
    header("Location: index.php");
}

$sql = sprintf(
    "DELETE FROM contactentries WHERE id=$customerId");

mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);

header("Location: appointmentInbox.php");
