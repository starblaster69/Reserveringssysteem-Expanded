<?php
//where customers can ask to arrange a meeting
//connects to: submission success.php + database submission + send email to opdrachtgever
$dateTime = date('j F Y, G:i:s');
$page = 'Contact';
readfile('tmpl.headerClient.php');
?>
    <main id='main-content'>
        <aside>
            <img src="images/busje.jpg" alt="Foto van bedrijfsbusje, genomen van de zijkant, zodat het logo zichtbaar is">
            <h3 class="contacttitle">Contactgegevens</h3>
            <p class="contactText">Wilt u een offerte aanvragen, of heeft u enkel een vraag? Dat kan! Vul uw gegevens hier direct in, en wij zullen zo snel mogelijk contact opnemen om uw klus verder te bespreken! Of als u liever ons belt, of een mailtje stuurt, kan dat natuurlijk ook! </p>
            <ul class="contactInfo">
                <li id="contactEmail">Email: VDScheer@nepemail.nl</li>
                <li id="contactTelefoon">Telefoon: 0612345678</li>
                <li id="contactAdres">Adres: verzonnenstraat 15, Nepstad</li>
                <li id="contactKantoorTijden">Kantoortijden: Ma. t/m Vr. van 10:00 - 17:00</li>
            </ul>
        </aside>
        <div class="formDiv">
            <form class="loginForm" name="contact" id="contact" action="clientContactConn.php" method="POST">
                <div>
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" placeholder="Naam" required>
                </div>
                <div>
                    <label for="adress">Adres:</label>
                    <input type="text" id="adress" name="adress" placeholder="Adres" required>
                </div>
                <div>
                    <label for="tel">Telefoonnummer:</label>
                    <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div>
                    <label for="details" class="detailsLabel">details over uw klus: Graag zo gedetaileerd mogelijk.</label>
                    <textarea id="details" form="contact" name="details" placeholder="details" required></textarea>
                </div>
                <div>
                    <label for="budget">Budget:</label>
                    <input type="text" id="budget" name="budget" placeholder="Budget" required>
                </div>
                <div>
                    <input type="hidden" id="datetime" name="datetime" value="<?= $dateTime;?>">
                </div>
            </form>
            <button form="contact" type="submit" name="submit">Versturen</button>
        </div>
        <div class="footerBuffer"></div>
    </main>
<?php readfile('tmpl.footer.html'); ?>
