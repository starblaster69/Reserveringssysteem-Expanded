<?php
//shows indepth information of an appointment.
//allows editing, and has room for additional comments
    //connects to: appointmentDeletionConfirm.php(popup?)
require 'auth.inc.php';
require_once  'connect.php';
$customerId = $_GET['id'];

$query = "SELECT * FROM contactentries WHERE id = " . $customerId;
$result = mysqli_query($conn, $query);
$assignment = mysqli_fetch_assoc($result);

//pull all the array data into seperate variables here
$name = htmlspecialchars($assignment['name']);
$adress = htmlspecialchars($assignment['adress']);
$tel = htmlspecialchars($assignment['tel']);
$email = htmlspecialchars($assignment['email']);
$details = htmlspecialchars($assignment['details']);
$budget = htmlspecialchars($assignment['budget']);
$contractorsInfo = htmlspecialchars($assignment['contractorsInfo']);
$comments = htmlspecialchars($assignment['comments']);

$dateTime = date('j F Y, G:i:s');
$page = 'AccountBeheer';
readfile('tmpl.headerEmployee.php');
?>
    <div class="formDiv">
        <form class="loginForm" name="detailsform" id="detailsform" action="appointmentUpdate.php" method="POST">
            <div>
                <label for="customerId"><strong>Klant Id:</strong></label>
                <input type="hidden" id="customerId" name="customerId" placeholder="customerId" value="<?=htmlspecialchars($customerId);?>" required>
                <span><?=(htmlspecialchars($customerId));?></span><br>
            </div>
            <div>
                <label for="name"><strong>Naam:</strong></label>
                <input type="text" id="name" name="name" placeholder="Naam" value="<?=$name;?>" required><br>
            </div>
            <div>
                <label for="adress"><strong>Adres:</strong></label>
                <input type="text" id="adress" name="adress" placeholder="Adres" value="<?=$adress;?>" required><br>
            </div>
            <div>
                <label for="tel"><strong>Telefoonnummer:</strong></label>
                <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer" value="<?=$tel;?>" required><br>
            </div>
            <div>
                <label for="email"><strong>Email:</strong></label>
                <input type="email" id="email" name="email" placeholder="Email" value="<?=$email;?>" required><br>
            </div>
            <div>
                <label for="details"><strong>details:</strong></label><br>
                <textarea id="details" form="detailsform" name="details" placeholder="details" required><?=$details;?></textarea>
            </div>
            <div>
                <label for="budget"><strong>Budget:</strong></label>
                <input type="text" id="budget" name="budget" placeholder="Budget" value="<?=$budget;?>" required><br>
            </div>
            <div>
                <label for="contractorsInfo"><strong>Mede-Aannemers Contact Informatie</strong></label><br>
                <textarea id="contractorsInfo" form="detailsform" name="contractorsInfo" placeholder="Mede-Aannemers Contact Informatie"><?=$contractorsInfo;?></textarea>
            </div>
            <div>
                <label for="comments"><strong>Notities:</strong></label><br>
                <textarea id="comments" form="detailsform" name="comments" placeholder="Notities"><?=$comments;?></textarea>
            </div>
            <div>
                <input type="hidden" id="datetime" name="datetime" value="<?= htmlspecialchars($dateTime);?>">
            </div>
        </form>
        <button form="detailsform" type="submit" name="submit" value="Opslaan">Opslaan</button>
    </div>
    <div>
        <br><br>
        <form name="customerId" id="customerId" action="appointmentDeletionConfirm.php" method="POST">
            <input type="hidden" value="<?=htmlspecialchars($customerId); ?>" name="customerId">
        </form>
        <button form="customerId" class="deleteButton" type="submit" value="Verwijder">Verwijderen</button>
    </div>
<?php readfile('tmpl.footer.html'); ?>