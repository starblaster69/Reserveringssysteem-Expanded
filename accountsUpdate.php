<?php //isAdmin check, if true, can alter Other accounts, if false, can NOT
require 'auth.inc.php';

if(isset($_GET)) {
    $message = $_GET;
    if($message) {
        echo "<h3>Account Geüpdated!</h3>";
    }}

$page = 'Account Wijzigen';
readfile('tmpl.headerEmployee.php');
?>
    <main id='main-content'>
        <div class="formDiv">
            <form class="loginForm" id="accntUpdate" action="accountsUpdateCheck.php" method="POST">
                <div>
                    <label for="email"><strong>Email:</strong></label>
                    <input type="text" id="email" name="email" placeholder="Email" required<br>
                </div>
                <div>
                    <label for="newEmail"><strong>Nieuwe Email:</strong></label>
                    <input type="text" id="newEmail" name="newEmail" placeholder="Email" required<br>
                </div>
                <div>
                    <label for="password"><strong>Huidig Wachtwoord:</strong></label>
                    <input type="password" id="password" name="password" placeholder="Huidig Wachtwoord" required<br>
                </div>
                <div>
                    <label for="newPassword"><strong>Nieuw Wachtwoord:</strong></label>
                    <input type="password" id="newPassword" name="newPassword" placeholder="Nieuw Wachtwoord" required<br>
                </div>
            </form>
            <button form="accntUpdate" type="submit" >Update</button>
        </div>
    </main>
<?php readfile('tmpl.footer.html'); ?>
