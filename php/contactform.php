<br>
<hr style="width: 50%; margin: 0 auto;"><br>
<section class="background-white" id="contactForm">
    <div class="section-wrapper-help" style="width: 75%;">
        <div class="two-inputs">
            <div style="text-align: left; width: 45%;">
                <p style="line-height: 1.5;">Ukoliko imate bilo kakvih pitanja vezanih uz naše proizvode i usluge, pošaljite nam upit i naša korisnička podrška će Vam odgovoriti u kratkom roku.</p><br>
                <img src="images/ContactUs.svg" width="480">
            </div>
            <div style="text-align: left; width: 45%;">
                <h1 style="letter-spacing: -1px;">Kontakt obrazac</h1>
                <form action="php/contactform-process.php" method="post" accept-charset="UTF-8" autocomplete="off" style="margin: 0 auto;">
                    <div class="two-inputs">
                        <div class="postal-code"><input required type="text" maxlength="24" name="name" id="name" placeholder="Ime"><br></div>
                        <div class="address"><input required type="email" maxlength="50" name="email" id="email" placeholder="Email"><br></div>
                    </div>
                    <textarea required name="message" id="message" maxlength="2000" placeholder="Poruka (obavezno)"><?php
                    if (isset($_GET["product"])){
                        echo "Imam upit za ovaj proizvod.";
                    }
                    ?></textarea>
                    <input type="number" id="product" name="product" maxlength="4" placeholder="Šifra proizvoda" <?php
                    if (isset($_GET["product"])){
                        echo 'value="';
                        echo $_GET["product"];
                        echo '"';
                    };
                    ?>
                    >
                    <div class="form-buttons">
                        <input type="submit" name="submit" value="Pošalji">
                        <input type="reset" value="Očisti podatke">
                    </div>
                </form>
                <?php if (isset($_GET['submiterror']) && $_GET['submiterror'] == "none") {
                    echo "<p>Vaša poruka je uspješno poslana!</p>";
                } ?>
            </div>
        </div>
    </div>
</section>