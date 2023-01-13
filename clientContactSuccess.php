<?php
//says submission complete if successfully uploaded
$page = 'Contact - Succes!';
readfile('tmpl.headerClient.php');
?>
    <div>
        <hr/>
        <h2>Uw aanvraag is ingestuurd!</h2>
        <h4>Hartelijk bedankt! Onze Medewerkers zullen zo snel mogelijk op uw bericht reageren.</h4>
        <h4><form action="index.php"><input type="submit" value="Terug naar hoofdpagina"></form></h4>
    </div>
<?php readfile('tmpl.footer.html'); ?>
