<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["currentUserName"])) {
    header("location: pagenotfound.php");
    exit();
}
include_once "header.php";
echo "<br>";
include_once "greetingstext.php";
?>
<section id="profileInformations">
    <div class="section-wrapper">
        <div style="display: flex; gap: 5%; margin-top: 24px;">
            <div style="flex-basis: 30%;">
                <h2>Vaši podatci</h2>
                <p>Izmijenite ili dodajte osobne i podatke za dostavu.</p>
            </div>
            <div style="flex-basis: 70%;">
                <?php
                if (isset($_GET['infoediterror'])) {
                    if ($_GET['infoediterror'] == "none") {
                        echo "<p>Osobni podatci su uspješno ažurirani!</p>";
                    }
                }
                include_once "php/databaseconnect.php";
                $id = $_SESSION["currentUserID"];
                $sql = "SELECT * FROM users WHERE id = ?";
                $stmt = mysqli_prepare($dbc, $sql);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                $userName = $row["name"];
                $userSurname = $row["surname"];
                $userAddress = $row["address"];
                $userPostalCode = $row["postalCode"];
                $userCity = $row["city"];
                $userState = $row["state"];
                $userContactNumber = $row["contactNumber"];
                $userEmail = $row["email"];
                ?>
                <form action="php/userinfoupdate-process.php" method="post" accept-charset="UTF-8" autocomplete="off">
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                    <div class="two-inputs">
                        <div class="input-div"><label for="name">Ime</label><input type="text" maxlength="24" name="name" id="name" placeholder="Ime" value="<?php echo $userName; ?>" required oninvalid="this.setCustomValidity('Obavezno ime korisnika')"><br></div>
                        <div class="input-div"><label for="surname">Prezime</label><input type="text" maxlength="24" name="surname" id="surname" placeholder="Prezime" value="<?php echo $userSurname; ?>" required oninvalid="this.setCustomValidity('Obavezno prezime korisnika')"><br></div>
                    </div>
                    <div class="two-inputs">
                        <div class="address">
                            <label for="address">Adresa</label><input type="text" name="address" id="address" maxlength="60" placeholder="Adresa" value="<?php echo $userAddress; ?>" required oninvalid="this.setCustomValidity('Obavezna adresa za dostavu')"><br>
                        </div>
                        <div class="postal-code">
                            <label for="postalCode">Poštanski broj</label><input type="text" name="postalCode" id="postalCode" maxlength="8" placeholder="Poštanski broj" value="<?php echo $userPostalCode; ?>" required oninvalid="this.setCustomValidity('Obavezan poštanski broj za dostavu')"><br>
                        </div>
                    </div>
                    <div class="two-inputs">
                        <div class="input-div"><label for="city">Grad</label><input type="text" name="city" id="city" maxlength="24" placeholder="Grad" value="<?php echo $userCity; ?>" required oninvalid="this.setCustomValidity('Obavezan grad za dostavu')"><br></div>
                        <div class="input-div">
                            <label for="state">Država</label><select class="input-state" name="state" id="state" required oninvalid="this.setCustomValidity('Obavezna država za dostavu')">
                                <option value="" disabled selected hidden>Država</option>
                                <option <?php if ($userState == "Hrvatska") echo "selected"; ?> value="Hrvatska">Hrvatska</option>
                                <option <?php if ($userState == "BiH") echo "selected"; ?> value="BiH">Bosna i Hercegovina</option>
                                <option <?php if ($userState == "Srbija") echo "selected"; ?> value="Srbija">Srbija</option>
                                <option <?php if ($userState == "Mađarska") echo "selected"; ?> value="Mađarska">Mađarska</option>
                                <option <?php if ($userState == "Slovenija") echo "selected"; ?> value="Slovenija">Slovenija</option>
                                <option <?php if ($userState == "Italija") echo "selected"; ?> value="Italija">Italija</option>
                                <option <?php if ($userState == "CrnaGora") echo "selected"; ?> value="CrnaGora">Crna Gora</option>
                            </select><br>
                        </div>
                    </div>
                    <label for="contactNumber">Kontakt broj</label><input type="text" name="contactNumber" id="contactNumber" maxlength="20" placeholder="Kontakt broj" value="<?php echo $userContactNumber; ?>" required oninvalid="this.setCustomValidity('Obavezan kontakt broj')"><br>
                    <label for="email">Email adresa</label><input type="email" name="email" id="email" maxlength="34" placeholder="Email" value="<?php echo $userEmail; ?>" required oninvalid="this.setCustomValidity('Obavezna email adresa za prijavu')"><br>
                    <div class="form-buttons">
                        <input type="submit" name="submit" value="Ažuriraj podatke">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="profileFavorites">
    <div class="section-wrapper">
        <br>
        <hr><br>
        <div style="display: flex; gap: 5%; margin-top: 24px;">
            <div style="flex-basis: 30%;">
                <h2>Vaši omiljeni proizvodi</h2>
                <p>Popis Vaših spremljenih proizvoda.</p>
            </div>
            <div style="flex-basis: 70%;">
                <div class="favorite-product-container">
                    <?php
                    include_once "php/databaseconnect.php";

                    $query = "SELECT favoritesList FROM favorites WHERE userEmail = '$userEmail'";
                    $result = mysqli_query($dbc, $query);
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $productIDs = $row['favoritesList'];

                            $productIDsArray = explode(",", $productIDs);
                            $productIDsList = implode(",", $productIDsArray);
                            $query = "SELECT * FROM products WHERE id IN ($productIDsList)";
                            $result = mysqli_query($dbc, $query);
                            $currentUserEmail = $_SESSION['currentUserEmail'];
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $manufacturer = $row['manufacturer'];
                                $name = $row['name'];
                                $imageURL1 = $row['imageURL1'];
                                echo "<div class='favorite-product'>
                            <a href='product.php?id={$id}'><div class='product-highlight-image' style='background-image: url({$imageURL1})'></div></a>
                            <div><span style='font-weight: 700;'>{$manufacturer}</span> {$name}</div>
                            <br><form method='POST' action='php/removeproductfromfavorites-process.php'>
                            <input type='hidden' id='product_ID' name='product_ID' value='$id'>
                            <input type='hidden' id='currentUserEmail' name='currentUserEmail' value='$currentUserEmail'>
                            <input type='submit' id='submit' name='submit' value='Ukloni'>
                            </form></div>";
                            }
                        } else {
                            echo "Pretražite naš katalog proizvoda i spremite omiljene proizvode za lakše praćenje dostupnosti i posebnih ponuda.";
                        }
                    } else {
                        die("Error retrieving existing string: " . mysqli_error($dbc));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="profileOrders">
    <div class="section-wrapper">
        <br>
        <hr><br>
        <h2>Vaše narudžbe</h2>
        <p>Popis vaših prethodnih narudžbi.</p>
        <?php
        $sql = "SELECT * FROM orders WHERE userEmail = ?";
        $stmt = mysqli_prepare($dbc, $sql);
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div style='display: flex; gap: 5%; margin-top: 24px;'><div style='flex-basis: 40%;'><div class='user-table-div'>
                        <table class='user-edit'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Korisnik</th>
                                <th>Email adresa</th>
                                <th>Datum</th>
                                <th>Vrijeme</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['userName']} {$row['userSurname']}</td>
                            <td>{$row['userEmail']}</td>
                            <td>{$row['submit_date']}</td>
                            <td>{$row['submit_time']}</td>
                        </tr>";
            echo "</tbody></table></div></div>";
            echo "<div style='flex-basis: 60%;'><div class='user-table-div'>
                    <table class='user-edit'>
                    <thead>
                        <tr>
                            <th style='width: 5%;'>ID</th>
                            <th style='width: 26%;'>Proizvođač</th>
                            <th style='width: 26%;'>Proizvod</th>
                            <th style='width: 16%;'>Cijena</th>
                            <th style='width: 11%;'>Količina</th>
                            <th style='width: 16%; text-align: right;'>Ukupno</th>
                        </tr>
                    </thead>
                    <tbody>";

            $products_IDs = $row['products_IDs'];
            $products = $row['products'];
            $products_manufacturers = $row['products_manufacturers'];
            $products_prices = $row['products_prices'];
            $products_total_prices = $row['products_total_prices'];
            $products_quantities = $row['products_quantities'];

            $products_IDs_array = explode(",", $products_IDs);
            $products_array = explode(",", $products);
            $products_manufacturers_array = explode(",", $products_manufacturers);
            $products_prices_array = explode(",", $products_prices);
            $products_total_prices_array = explode(",", $products_total_prices);
            $products_quantities_array = explode(",", $products_quantities);

            echo "<tr><td>";
            foreach ($products_IDs_array as $product_ID) {
                echo $product_ID . "<br>";
            }
            echo "</td><td>";
            foreach ($products_manufacturers_array as $product_manufacturer) {
                echo $product_manufacturer . "<br>";
            }
            echo "</td><td>";
            foreach ($products_array as $product) {
                echo $product . "<br>";
            }
            echo "</td><td>";
            foreach ($products_prices_array as $product_price) {
                $product_price = number_format($product_price, 2, '.', ',');
                echo $product_price . "€<br>";
            }
            echo "</td><td>";
            foreach ($products_quantities_array as $product_quantity) {
                echo $product_quantity . "<br>";
            }
            echo "</td><td style='text-align: right;'>";
            foreach ($products_total_prices_array as $product_total_price) {
                $product_total_price = number_format($product_total_price, 2, '.', ',');
                echo $product_total_price . "€<br>";
            }

            $total_price = number_format($row['total_price'], 2, '.', ',');
            echo "</td></tr>
                    <tr style='color: var(--main-blue-color);'>
                        <td colspan='5'>Cijena ukupno</td>
                        <td style='text-align: right;'>$total_price €</td>
                    </tr>";
            echo "</tbody></table></div></div></div>";
        } ?>
    </div>
</section>
<section id="newsletter">
    <div class="section-wrapper">
        <br>
        <hr><br>
        <h2 style="width: 50%; margin: 0 auto; text-align: center;">Newsletter</h2>
        <?php
        include_once "php/databaseconnect.php";
        $email = $_SESSION['currentUserEmail'];
        $sql = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = mysqli_query($dbc, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<p style='text-align: center;'>Prijavljeni ste na naš newsletter. Hvala Vam!</p><br>";
            echo "<form action='php/newsletter-process.php' method='POST' onsubmit='return confirmSubmit();' style='width: 30%; margin: 0 auto;'><input type='hidden' name='email' id='email' value='{$email}'>
            <input type='submit' name='removeNewsletter' value='Odjava s newsletter-a'>
        </form>";
        } else {
            echo "<p style='text-align: center; width: 55%; margin: 0 auto;'>Želite li među prvima saznati o posebnim pogodnostima i najnovijim inovacijama u svijetu audio opreme? Personalizirane ponude je ono što ste tražili? Zanimaju Vas tajni savjeti i trikovi u audio svijetu?<br>Prijavite se na naš newsletter kako bi zajedno stvorili audio čaroliju!</p><br>";
            echo "<form action='php/newsletter-process.php' method='POST' style='width: 30%; margin: 0 auto;'><input type='hidden' name='email' id='email' value='{$email}'><input type='hidden' name='location' id='location' value='profile'>
            <input type='submit' name='addNewsletter' value='Prijava na newsletter'>
        </form>";
        }
        if (isset($_GET["newsletter"])) {
            $message = ($_GET["newsletter"] == "removed") ? "Uspješno ste odjavljeni sa newsletter-a." : "Uspješno ste prijavljeni na newsletter.";
            echo "<p style='text-align: center;'>$message</p>";
        }

        mysqli_close($dbc);
        ?>
    </div>
</section>
<section id="newsletter">
    <div class="section-wrapper">
        <br>
        <hr><br>
        <h2 style="width: 50%; margin: 0 auto; text-align: center;">Brisanje korisničkog računa</h2><br>
        <?php
        $accountDeleteMessage = array(
            "Za brisanje svog korisničkog računa koristite gumb ispod. Prije nego što donesete konačnu odluku, želimo provjeriti je li sve u redu. Ako imate poteškoća ili nešto što želite podijeliti s nama, slobodno nas kontaktirajte. Cijenimo Vaše povjerenje i trudimo se pružiti najbolju uslugu.",
            "Za brisanje svog korisničkog računa koristite gumb ispod. Ako imate bilo kakvih pitanja ili nedoumica koje bismo mogli riješiti, stojimo Vam na raspolaganju. Vaše povjerenje je važno za nas, i zahvaljujemo Vam na suradnji.",
            "Za brisanje svog korisničkog računa koristite gumb ispod. Ukoliko imate prigovora ili sugestija koje biste željeli podijeliti s nama, molimo Vas da nam se obratite. Cijenimo Vašu prisutnost i trudimo se poboljšati našu uslugu. Ako ipak odlučite nastaviti s brisanjem, zahvaljujemo Vam na povjerenju koje ste nam ukazali do sada."
        );
        $random_number = rand(0, 2);
        $message = $accountDeleteMessage[$random_number];
        echo '<p style="text-align: left; width: 60%; margin: 0 auto; line-height: 1.5rem;">' . $message . '</p>';
        ?><br>
        <p style="text-align: left; width: 60%; margin: 0 auto; font-weight: 300; line-height: 1.5rem;">* Brisanje korisničkog profila ukloniti će Vaše podatke, povijest narudžbi, omiljene proizvode te prijavu na newsletter</p><br>
        <form method="POST" action="php/accountdelete-process.php" style="width: 30%; margin: 0 auto; text-align: center;">
            <input type="hidden" name="profileID" id="profileID" value="<?php echo $id; ?>">
            <input type="hidden" name="email" id="email" value="<?php echo $userEmail; ?>">
            <input type="submit" value="Obriši korisnički račun" style="outline: 3px solid #D64550; background-color: #D64550;">
        </form>
    </div>
</section>
<script>
    function confirmSubmit() {
        var confirmed = confirm("Jako nam je žao što ste odlučili napustiti našu audio obitelj i odjaviti se s našeg newslettera. Ako ste odlučili da trenutno niste zainteresirani za primanje naših e-mailova, razumijemo i poštujemo vašu odluku. Vaše želje su nam važne i uvijek ćemo se truditi pružiti vam najbolje iskustvo.");
        if (confirmed) {
            confirmed = confirm("Odjava s newsletter-a");
            return confirmed;
        }
        return false;
    }
</script>
<?php
include_once "footer.php";
?>