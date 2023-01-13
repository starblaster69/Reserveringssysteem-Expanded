<?php
require 'authAdm.inc.php';
$page = 'Accounts Creeëren';
readfile('tmpl.headerEmployee.php');
?>
    <div class="formDiv">
        <form class="loginForm" id="accntCreate" action="accountsCreateNewCheck.php" method="POST">
            <label for="email"><strong>Email:</strong></label>
            <input type="text" id="email" name="email" placeholder="Email" required><br>
            <label for="password"><strong>Wachtwoord:</strong></label>
            <input type="password" id="password" name="password" placeholder="Wachtwoord" required><br>
            <!--<label for="isAdm"><strong>Administratief:</strong></label>
            <input type="checkbox" id="isAdm" name="isAdm" required><br>-->
        </form>
        <button form="accntCreate" type="submit" >Account aanmaken</button>
    </div>
<div class="footerBuffer"></div>
<?php readfile('tmpl.footer.html'); ?>
