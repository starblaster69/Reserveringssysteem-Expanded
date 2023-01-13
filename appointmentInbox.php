<?php
//overview of all received contacts
//connects to: photoUpload.php + appointmentDetails.php + accountsManagement.php
require 'auth.inc.php';
require_once  'connect.php';

$result = $conn->query('SELECT * FROM contactentries');
$page = "Afspraken";
readfile('tmpl.headerEmployee.php');
?>
    <main>
        <table>
            <caption>list of every received client-sent job offering, listing their names, adress, desired work, and budget, as well as finishing with a details readmore link</caption>
            <thead><h3 class="inboxHead">Inbox</h3>
                <tr>
                    <th class="tableNumber" scope="col">#</th>
                    <th class="tableName" scope="col">Naam</th>
                    <th class="tableAdress" scope="col">Adres</th>
                    <th class="tableTel" scope="col">Telefoon Nummer</th>
                    <th class="tableEmail" scope="col">Email</th>
                    <th class="tableDetails" scope="col">Details</th>
                    <th class="tableDate" scope="col">Laatste Aanpassing:</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0;
                foreach ($result as $row) {?>
                <tr class="item_row">
                    <td class="tableNumber"><span><?= ++$total; ?></span></td>
                    <td class="tableName"> <?= htmlspecialchars($name = $row['name']); ?></td>
                    <td class="tableAdress"> <?= htmlspecialchars($adress = $row['adress']); ?></td>
                    <td class="tableTel"> <?= htmlspecialchars($tel = $row['tel']); ?></td>
                    <td class="tableEmail"> <?= htmlspecialchars($email = $row['email']); ?></td>
                    <td class="tableDetails"> <?= htmlspecialchars($details = $row['details']); ?></td>
                    <td class="tableDate"> <?= htmlspecialchars($lastEdit = $row['lastEdit']); ?></td>
                    <td class="detailsButton"><a href="appointmentDetails.php?id=<?= htmlspecialchars($row['id'])?>">Details</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
<?php readfile('tmpl.footer.html'); ?>
