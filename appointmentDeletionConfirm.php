<?php
require 'auth.inc.php';
$page = 'AccountBeheer';
$customerId = $_POST['customerId'];
readfile('tmpl.headerEmployee.php');
?>
    <div>
        <hr/>
        <h1>Verwijderen?</h1>
        <h4>Weet U zeker dat u deze afspraak wilt verwijderen?</h4>
        <div>
            <form name="customerId" id="customerId" action="appointmentDeletion.php" method="POST">
                <input type="hidden" value="<?= htmlspecialchars($customerId)?>" name="customerId">
                <input type="submit" value="Ja">
            </form>
        </div>
            <form action="appointmentInbox.php"><input type="submit" value="Nee"></form>
    </div>
<?php readfile('tmpl.footer.html'); ?>
