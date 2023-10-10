<?php
include_once 'header.php';
?>
<section class="contact-info">
    <div class="section-wrapper vertical-padding">
        <div class="contact-title">
            <div class="contact-title-image">
                <img src="images/ContactUs.svg" width="360" alt="Ilustracija službenice kontakt službe">
            </div>
            <div class="contact-title-text">
                <h1 class="title-bottom-padding" style="letter-spacing: -1px;">Kontaktiraj nas</h1>
                <p class="line-height">Kao klijent online trgovine Vokaton možete kontaktirati naše odjele, stručnjake i administrativni tim putem telefona ili email adresa. Ovdje se nalazi popis svih email adresa i telefonskih brojeva za sve naše odjele.<br>
                Također, upit u vezi naših proizvoda i usluga možete poslati putem <a style="text-decoration: none; color: var(--main-blue-color); transition: 0.15s;" onmouseover="this.style.opacity='75%';" onmouseout="this.style.opacity='100%';"href="help.php#contactForm">kontakt obrasca.</a></p>
            </div>
        </div>
    </div>
    <div class="contactus-section-wrapper">
        <div class="phone-numbers full-width">
            <h2>Možete nas kontaktirati na slijedeće brojeve</h2>
            <table class="contactus-table">
                <tr>
                    <th>Plaćanje</th>
                    <th>+012 34 567 8910</th>
                </tr>
                <tr>
                    <th>Reklamacije</th>
                    <th>+123 45 678 9101</th>
                </tr>
                <tr>
                    <th>Povrat</th>
                    <th>+234 56 789 1011</th>
                </tr>
                <tr>
                    <th>Narudžbe</th>
                    <th>+345 67 891 0111</th>
                </tr>
                <tr>
                    <th>Ostali upiti</th>
                    <th>+456 78 910 1112</th>
                </tr>
            </table>
        </div>
        <div class="email-addresses full-width">
            <h2>ili nam poslati mail na navedene email adrese</h2>
            <table class="contactus-table">
                <tr>
                    <th>Plaćanje</th>
                    <th><a href="mailto:vokaton@placanje.hr">vokaton@placanje.hr</a></th>
                </tr>
                <tr>
                    <th>Reklamacije</th>
                    <th><a href="mailto:vokaton@reklamacije.hr">vokaton@reklamacije.hr</a></th>
                </tr>
                <tr>
                    <th>Povrat</th>
                    <th><a href="mailto:vokaton@povrat.hr">vokaton@povrat.hr</a></th>
                </tr>
                <tr>
                    <th>Narudžbe</th>
                    <th><a href="mailto:vokaton@narudzbe.hr">vokaton@narudzbe.hr</a></th>
                </tr>
                <tr>
                    <th>Ostali upiti</th>
                    <th><a href="mailto:vokaton@info.hr">vokaton@info.hr</a></th>
                </tr>
            </table>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>