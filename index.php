<?php
//homepage
//connects to: clientContact.php + login.php + gallery
$page = 'Home';
readfile('tmpl.headerClient.php');
?>
    <main id='main-content'>
        <article id="about" class="about">
            <h3>Over Ons</h3>
            <h4>Historie</h4>
            <p> Hier bij timmerbedrijf V.D. Scheer zijn wij al bijna twintig jaar hard aan het werk om uitstekend constructiewerk te leveren in Leiden en Regio. Onze vakmannen hebben jaren ervaring in het bouwen van allerlei constructies, zoals onder andere badkamers, dakkapellen, aanbouwingen of zelfs compleet nieuwe villa’s.</p>
            <h4>Onze Missie</h4>
            <p>Elke klant heeft natuurlijk specifieke wensen en eisen waarvan ze hun gloednieuwe dakkapel, veranda, of schuur willen laten voldoen. Onze experts hebben een sterk creatief inzicht, en zullen gericht en enthousiast te werk gaan naar uw wensen, zodat u het perfecte eindproduct ontvangt. Met een timmerman van timmerbedrijf V.D. Scheer kunt u gerust zijn dat al het werk vlug en betrouwbaar wordt uitgevoerd.
            </p>
            <h4>Duurzaam</h4>
            <p>Duurzaamheid vinden wij enorm belangrijk, hier bij timmerbedrijf V.D. Scheer. Hierom werken wij altijd met de meest duurzame en milieuvriendelijke materialen tot onze beschikking, zodat uw nieuwe bouwwerk nog jaren en jaren in geweldige staat blijft. </p>
        </article>
        <section>
            <section id="galleryHeader" class="galleryHeader">
                <h3>Fotos</h3><!--dit verplaatsen naar eigen pagina? -->
                <p>Voorgaande succesvolle klussen, zijn, onder anderen: nieuwe aanbouw, nieuwe badkamer, keukenuitbreiding, dakreparatie en dakkapel aanleggen, en zelfs compleet nieuwe villa’s gebouwd.</p>
            </section>
            <section id="gallery" class="gallery">
                <figure >
                    <img class="imgMain" src="images/dakkapel2.jpg" alt="nieuwbouw dakkapel, work-in-progres, Placeholder">
                </figure>
                <figure>
                    <img class="imgMain" src="images/dakkapel1.jpg" alt="nieuwbouw dakkapel, eindresultaat, Placeholder">
                </figure>
                <figure>
                    <img class="imgMain" src="images/keuken1.jpg" alt="nieuwbouw keuken, Placeholder">
                </figure>
                <figure>
                    <img class="imgMain" src="images/aanbouw1.jpg" alt="buitenkant van een nieuwe aanbouw van een boerderij, Placeholder">
                </figure>
                <figure>
                    <img class="imgMain" src="images/aanbouw2.jpg" alt="interieur van een nieuwe aanbouw van een boerderij, Placeholder">
                </figure>
            </section>
        </section>
    </main>
<?php readfile('tmpl.footer.html'); ?>
