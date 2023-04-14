<footer>
    <section class="background-grey">
        <div class="section-wrapper" style="padding-top: 36px;">
            <div class="box">
                <h3>Kupujte i plaćajte sigurno</h3>
                <ul class="payingmethods">
                    <li><a href="paymentoptions.php"><img width="75" class="grayscale" src="images/PaymentMethods/PayPal.png"></a></li>
                    <li><a href="paymentoptions.php"><img width="75" src="images/PaymentMethods/Visa.png"></a></li>
                    <li><a href="paymentoptions.php"><img width="75" src="images/PaymentMethods/MasterCard.png"></a></li>
                </ul>
                <ul class="payingmethods">
                    <li><a href="paymentoptions.php"><img width="75" src="images/PaymentMethods/AmericanExpress.png"></a></li>
                    <li><a href="paymentoptions.php"><img width="75" src="images/PaymentMethods/Diners.png"></a></li>
                    <li><a href="paymentoptions.php"><img width="75" src="images/PaymentMethods/BankTransfer.png"></a></li>
                </ul>
            </div>
            <div class="box">
                <h3>Vaše pogodnosti</h3>
                <ul class="yourbenefits">
                    <li><img src="images/Tick.png" width="14">3 godine garancije</li>
                    <li><img src="images/Tick.png" width="14">30 dana rok povrata novca</li>
                    <li><img src="images/Tick.png" width="14">Raznolika ponuda proizvoda</li>
                    <li><img src="images/Tick.png" width="14">Usluge popravka</li>
                    <li><img src="images/Tick.png" width="14">Korisnička podrška</li>
                    <li><img src="images/Tick.png" width="14">Jamstvo zadovoljstva</li>
                </ul>
            </div>
            <div class="box">
                <h3>Usluge</h3>
                <ul>
                    <li><a href="catalog.php">Katalog proizvoda</a></li>
                    <li><a href="shipingcostsanddeliverytimes.php">Cijena i vrijeme dostave</a></li>
                    <li><a href="help.php">Pomoć</a></li>
                    <li><a href="paymentoptions.php">Načini plaćanja</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="background-black footer-padding">
        <div class="section-wrapper">
            <div class="box">
                <ul class="text-dark-grey footer-ul">
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=speakerBundle">Kompleti razglasa</a></li>
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=activeSpeaker">Aktivni zvučnici</a> / <a href="filteredproducts.php?productCategory=speakers&speakerType=passiveSpeaker">Pasivni zvučnici</a></li>
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=monitorSpeaker">Monitorski zvučnici</a></li>
                    <li><a href="filteredproducts.php?productCategory=amplifiers">Pojačala</a> / <a href="filteredproducts.php?productCategory=mixers">Miksete</a></li>
                    <li><a href="filteredproducts.php?productCategory=light">Rasvjeta</a></li>
                    <li><a href="filteredproducts.php?productCategory=cables">Kablovi</a> / <a href="filteredproducts.php?productCategory=adapters">Adapteri</a></li>
                    <li><a href="filteredproducts.php?productCategory=accessories">Dodatna oprema</a> / <a href="filteredproducts.php?productCategory=covers">Torbe</a></li>
                </ul>
            </div>
            <div class="box">
                <h3 style="color:grey;">Pratite nas i na društvenim mrežama!</h3>
                <ul class="socialIcons">
                    <li><img width="50" src="images/socialIcons/Facebook.png"></li>
                    <li><img width="50" src="images/socialIcons/Instagram.png"></li>
                    <li><img width="50" src="images/socialIcons/LinkedIn.png"></li>
                    <li><img width="50" src="images/socialIcons/YouTube.png"></li>
                </ul>
                <div class="newsletter" id="newsletter">
                    <form method="POST" action="php/newsletter-process.php" autocomplete="off" accept-charset="UTF-8">
                        <input maxlength="60" type="email" name="email" id="email" class="inline-block" required oninvalid="this.setCustomValidity('Unesite email adresu')" placeholder="Prijavite se na naš newsletter!">
                        <input type="submit" name="submit" class="inline-block" value="Prijava">
                    </form>
                </div>
                <?php
                if (isset($_GET['newsletter'])) {
                    if ($_GET['newsletter'] == 'success') {
                        echo "<p style='width: 85%; color: grey;'>Uspješno ste prijavljeni na newsletter!</p>";
                    } else {
                        header("location: pagenotfound.php");
                    }
                }
                ?>
            </div>
            <div class="box">
                <ul class="text-dark-grey footer-ul">
                    <li><a href="aboutus.php">O nama</a></li>
                    <li><a href="contactus.php">Kontaktiraj nas</a></li>
                    <li><a href="warranty.php">3 godine jamstva</a></li>
                    <li><a href="returns.php">Povrat robe</a></li>
                </ul>
                <p class="footer-copyright-text text-dark-grey" style="margin-top: 24px; font-weight: 300;">© 2018 - 2023 Vokaton - trgovina audio opreme. Sva prava pridržana.</p>
            </div>
        </div>
    </section>
</footer>
</body>

</html>