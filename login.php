<?php
//login page admin
//connects to (on login success): appointmentInbox.php
$page = 'Login';
readfile('tmpl.headerClient.php');
?>
    <div class="formDiv">
        <form class="loginForm" id="login" action="loginCheck.php" method="POST">
            <label for="email"><strong>Email:</strong></label>
            <input type="text" id="email" name="email" placeholder="Email" required<br>
            <label for="password"><strong>Wachtwoord:</strong></label>
            <input type="password" id="password" name="password" placeholder="Wachtwoord" required<br>
        </form>
        <button form="login" type="submit" >Login</button>
    </div>
    <div class="footerBuffer">
    </div>
<?php readfile('tmpl.footer.html'); ?>
