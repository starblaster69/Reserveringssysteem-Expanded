<?php
require 'auth.inc.php';
$page = 'AccountBeheer';
readfile('tmpl.headerEmployee.php');
?>
    <div class="accntManDiv">
        <ul class="accntManMenu">
            <li><a href="accountsCreateNew.php">Account Maken</a></li>
            <li><a href="accountsUpdate.php">Account wijzigen</a></li>
            <li><a href="accountsDelete.php">Account verwijderen</a></li>
        </ul>
    </div>
    <div class="footerBuffer"></div>
<?php readfile('tmpl.footer.html'); ?>