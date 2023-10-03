<?php
session_start();
if (!isset($_SESSION["currentUserStatus"])) {
    header("location: pagenotfound.php");
    exit();
} else {
    if ($_SESSION["currentUserStatus"] != 1) {
        header("location: pagenotfound.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Vokaton - Administracija</title>
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32 64x64">
    <link rel="stylesheet" href="css/administration.css">
    <link rel="stylesheet" href="css/productupload-forms.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
    <meta name="theme-color" content="#17a4e5">
</head>

<body>
    <div class="page-wrapper">
        <!-- Navigation bar -->
        <section style="margin-bottom: 0px;" id="navigationBar">
            <div class="section-wrapper-navigation">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#usersManagement">Korisnički računi</a></li>
                        <li><a href="#orderHistory">Povijest narudžbi</a></li>
                        <li><a href="#newsletterEmails">Newsletter</a></li>
                    </ul>
                </div>
                <div class="main-logo">
                    <a class="null-link" style="cursor: pointer;" href="index.php"><img src="images/mainLogo.png" width="180" alt="Vokaton logo"></a>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="index.php">Povratak na stranicu</a></li>
                        <li><a href="php/signout-process.php">Odjava administratora</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="background-black text-white">
            <div class="section-wrapper">
                <h1 class="welcome-message">Administracijski sustav web trgovine</h1>
            </div>
        </section>
        <!-- Product upload -->
        <section id="productUpload">
            <div class="section-wrapper">
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Unos novog proizvoda u bazu podataka</h2>
                        <form method="GET" action="administration.php">
                            <select class="input-product-category" name="productCategory" id="productCategory">
                                <option value="" disabled selected hidden>Kategorija proizvoda</option>
                                <option value="speakers">Zvučnici</option>
                                <option value="amplifiers">Pojačala</option>
                                <option value="mixers">Miksete</option>
                                <option value="controllers">Kontroleri</option>
                                <option value="light">Rasvjeta</option>
                                <option value="cables">Kablovi</option>
                                <option value="adapters">Adapteri</option>
                                <option value="accessories">Dodatna oprema</option>
                                <option value="covers">Torbe</option>
                            </select>
                            <div class="form-button">
                                <input type="submit" name="submit" value="Dodaj proizvod">
                            </div>
                        </form>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET["uploaderror"]) && $_GET["uploaderror"] == "none") {
                            echo "<p>Proizvod je uspješno dodan u bazu podataka!</p>";
                        }
                        if (isset($_GET['productCategory'])) {
                            $productCategory = $_GET['productCategory'];
                            $productCategoryTitle = getProductCategoryTitle($productCategory);
                            echo "<div style='display: flex; width: 100%; justify-content: space-between;'>";
                            echo "<h2>Unosite novi proizvod u kategoriji: <span style='font-weight: 600; color: var(--main-blue-color);'>$productCategoryTitle</span></h2>";
                            echo "<a href='administration.php#productUpload' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a>";
                            echo "</div>";
                            $includeProductForm = "php/productupload-forms/$productCategory.php";
                            include_once $includeProductForm;
                        }
                        function getProductCategoryTitle($category)
                        {
                            $categoryTitles = [
                                'speakers' => 'Zvučnici',
                                'amplifiers' => 'Pojačala',
                                'mixers' => 'Miksete',
                                'controllers' => 'Kontroleri',
                                'light' => 'Rasvjeta',
                                'cables' => 'Kablovi',
                                'adapters' => 'Adapteri',
                                'accessories' => 'Dodatna oprema',
                                'covers' => 'Torbe',
                            ];
                            return isset($categoryTitles[$category]) ? $categoryTitles[$category] : '';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product management -->
        <section id="productManagement">
            <div class="section-wrapper">
            <hr>
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Uređivanje proizvoda u bazi podataka</h2>
                        <?php
                        include_once "php/databaseconnect.php";
                        $sql = "SELECT id, manufacturer, name FROM products";
                        $stmt = mysqli_prepare($dbc, $sql);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $id, $manufacturer, $productName);
                        echo "<div class='product-table-div'><table class='product-edit'><thead>
                        <tr>
                            <th>ID</th>
                            <th>Proizvod</th>
                            <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                        </tr></thead><tbody>";
                        while (mysqli_stmt_fetch($stmt)) {
                            echo "<tr>
                        <td>{$id}</td>
                        <td>{$manufacturer} {$productName}</td>
                        <td style='text-align: right; padding-right: 16px;'><a href='administration.php?productid={$id}#productManagement'>Uredi</a></td>
                    </tr>";
                        }
                        echo "</tbody></table></div>";
                        mysqli_stmt_close($stmt);
                        ?>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET['productediterror']) && $_GET['productediterror'] == "none") {
                            echo "<p>Proizvod je uspješno ažuriran!</p>";
                        }

                        if (isset($_GET['productdelete']) && $_GET['productdelete'] == "success") {
                            echo "<p>Proizvod je uspješno uklonjen iz baze podataka!</p>";
                        }
                        if (isset($_GET['productid'])) {
                            $id = $_GET['productid'];
                            $sql = "SELECT category, manufacturer, name FROM products WHERE id = ?";
                            $stmt = mysqli_prepare($dbc, $sql);
                            mysqli_stmt_bind_param($stmt, "i", $id);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_bind_result($stmt, $productCategory, $manufacturer, $productName);
                            if (mysqli_stmt_fetch($stmt)) {
                                echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete proizvod: <span style='font-weight: 600; color: var(--main-blue-color);'>{$manufacturer} {$productName}</span></h2><a href='administration.php#productManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                                $includeProductForm = "php/productedit-forms/{$productCategory}.php";
                                include_once $includeProductForm;
                            }
                            mysqli_stmt_close($stmt);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Users management -->
        <section id="usersManagement">
            <div class="section-wrapper">
            <hr>
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Upravljanje korisničkim računima iz baze podataka</h2>
                        <?php
                        include_once "php/databaseconnect.php";
                        $sql = "SELECT id, name, surname FROM users";
                        $stmt = mysqli_prepare($dbc, $sql);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $id, $userName, $userSurname);
                        echo "<div class='user-table-div'><table class='user-edit'><thead>
                        <tr>
                            <th>ID</th>
                            <th>Korisnik</th>
                            <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                        </tr></thead><tbody>";
                        while (mysqli_stmt_fetch($stmt)) {
                            echo "<tr>
                        <td>{$id}</td>
                        <td>{$userName} {$userSurname}</td>
                        <td style='text-align: right; padding-right: 16px;'><a href='administration.php?userid={$id}#usersManagement'>Uredi</a></td>
                    </tr>";
                        }
                        echo "</tbody></table></div>";
                        mysqli_stmt_close($stmt);
                        ?>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET['userediterror']) && $_GET['userediterror'] == "none") {
                            echo "<p>Korisnički račun je uspješno ažuriran!</p>";
                        }

                        if (isset($_GET['userdelete']) && $_GET['userdelete'] == "success") {
                            echo "<p>Korisnički račun je uspješno uklonjen iz baze podataka!</p>";
                        }
                        if (isset($_GET['userid'])) {
                            $id = $_GET['userid'];
                            $sql = "SELECT name, surname FROM users WHERE id = ?";
                            $stmt = mysqli_prepare($dbc, $sql);
                            mysqli_stmt_bind_param($stmt, "i", $id);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_bind_result($stmt, $userName, $userSurname);
                            if (mysqli_stmt_fetch($stmt)) {
                                echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete korisnički račun: <span style='font-weight: 600; color: var(--main-blue-color);'>{$userName} {$userSurname}</span></h2><a href='administration.php#productManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                                include_once "php/edituserform.php";
                            }
                            mysqli_stmt_close($stmt);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Order history -->
        <section id="orderHistory">
            <div class="section-wrapper">
            <hr>
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Povijest narudžbi</h2>
                    </div>
                </div>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT * FROM orders";
                $result = mysqli_query($dbc, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='two-elements'><div style='flex-basis: 40%;'><div class='user-table-div'>
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
                            <th>ID</th>
                            <th>Proizvođač</th>
                            <th>Proizvod</th>
                            <th>Cijena</th>
                            <th>Količina</th>
                            <th style='text-align: right;'>Ukupno</th>
                        </tr>
                    </thead>
                    <tbody>";
                    $products_IDs_array = array_map('trim', explode(",", $row['products_IDs']));
                    $products_array = array_map('trim', explode(",", $row['products']));
                    $products_manufacturers_array = array_map('trim', explode(",", $row['products_manufacturers']));
                    $products_prices_array = array_map('trim', explode(",", $row['products_prices']));
                    $products_total_prices_array = array_map('trim', explode(",", $row['products_total_prices']));
                    $products_quantities_array = array_map('trim', explode(",", $row['products_quantities']));

                    echo "<tr>";
                    $columns = [
                        $products_IDs_array,
                        $products_manufacturers_array,
                        $products_array,
                        $products_prices_array,
                        $products_quantities_array,
                        $products_total_prices_array
                    ];
                    foreach ($columns as $column) {
                        echo "<td>";
                        foreach ($column as $value) {
                            if ($column === $products_prices_array || $column === $products_total_prices_array) {
                                $value = number_format($value, 2, '.', ',') . "€";
                            }
                            echo $value . "<br>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                    $total_price = number_format($row['total_price'], 2, '.', ',');
                    echo "</tbody>
                    <tfoot>
                        <tr>
                            <td colspan='5' class='total-label'>Cijena ukupno</td>
                            <td style='text-align: right;'>{$total_price}€</td>
                        </tr>
                    </tfoot>
                    </table></div></div></div>";
                } ?>
            </div>
        </section>

        <!-- Newsletter -->
        <section id="newsletterEmails">
            <div class="section-wrapper">
            <hr>
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="single-element-right" style="text-align: left;">
                        <h2>Email adrese prijavljene na newsletter</h2>
                        <?php
                        include_once "php/databaseconnect.php";
                        $sql = "SELECT * FROM newsletter";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<p>{$row['email']}</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top"><img alt="Gumb za povratak na vrh stranice" src="images/DropdownIcon.png" width="24"></a>
        <script type="text/javascript" src="js/main.js"></script>

        <!-- Footer -->
        <footer>
            <section class="background-grey footer-padding">
                <div class="section-wrapper-navigation">
                    <ul class="text-black" style="margin: 0 auto;">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#usersManagement">Korisnički računi</a></li>
                        <li><a href="#orderHistory">Povijest narudžbi</a></li>
                        <li><a href="#newsletterEmails">Newsletter</a></li>
                    </ul>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>