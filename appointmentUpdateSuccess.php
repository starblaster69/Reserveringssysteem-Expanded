<?php
//says submission complete if successfully uploaded
require 'auth.inc.php';
$page = 'AccountBeheer';
readfile('tmpl.headerEmployee.php');
?>
    <div>
        <hr/>
        <h2>Informatie Geüpdated!</h2>
        <a href="appointmentInbox.php">Terug naar inbox</a>
    </div>
<?php readfile('tmpl.footer.html'); ?>
