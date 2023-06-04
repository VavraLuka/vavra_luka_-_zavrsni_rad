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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
    <meta name="theme-color" content="#17a4e5">
</head>

<body>
    <div class="page-wrapper">
        <!-- Navigation bar -->
        <section class="background-grey" style="margin-bottom: 0px;" id="navigationBar">
            <div class="section-wrapper-navigation">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li style="clear: both;"><a href="#usersManagement">Korisnički računi</a></li>
                        <li><a href="#orderHistory">Povijest narudžbi</a></li>
                        <li><a href="#newsletterEmails">Newsletter</a></li>
                    </ul>
                </div>
                <div class="main-logo">
                    <a class="null-link" href="index.php"><img src="images/mainLogo.png" width="160"></a>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="index.php">Povratak na stranicu</a></li>
                        <li style="clear: both;"><a href="php/signout-process.php">Odjava administratora</a></li>
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
                        if (isset($_GET["uploaderror"])) {
                            if ($_GET["uploaderror"] == "none") {
                                echo "<p>Proizvod je uspješno dodan u bazu podataka!</p>";
                            }
                        }
                        if (isset($_GET['productCategory'])) {
                            $productCategory = $_GET['productCategory'];
                            if ($productCategory == "speakers") {
                                $productCategoryTitle = "Zvučnici";
                            } else if ($productCategory == "amplifiers") {
                                $productCategoryTitle = "Pojačala";
                            } else if ($productCategory == "mixers") {
                                $productCategoryTitle = "Miksete";
                            } else if ($productCategory == "controllers") {
                                $productCategoryTitle = "Kontroleri";
                            } else if ($productCategory == "light") {
                                $productCategoryTitle = "Rasvjeta";
                            } else if ($productCategory == "cables") {
                                $productCategoryTitle = "Kablovi";
                            } else if ($productCategory == "adapters") {
                                $productCategoryTitle = "Adapteri";
                            } else if ($productCategory == "accessories") {
                                $productCategoryTitle = "Dodatna oprema";
                            } else {
                                $productCategoryTitle = "Torbe";
                            }
                            echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2>Unosite novi proizvod u kategoriji: <span style='font-weight: 600; color: var(--main-blue-color);'>" . $productCategoryTitle . "</span></h2><a href='administration.php#productUpload' class='clear-link'><img class='close-icon' src='images/closeIcon.svg'></a></div>";
                            $includeProductForm = "php/productupload-forms/$productCategory.php";
                            include_once $includeProductForm;
                        }
                        ?>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <!-- Product management -->
        <section id="productManagement">
            <div class="section-wrapper">
                <div class="two-elements">
                    <div class="single-element-left">
                        <h2>Uređivanje proizvoda u bazi podataka</h2>
                        <?php
                        include_once "php/databaseconnect.php";
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($dbc, $sql);

                        echo "<div class='product-table-div'><table class='product-edit'><thead>
                            <tr>
                                <th>ID</th>
                                <th>Proizvod</th>
                                <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                            </tr></thead><tbody>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['manufacturer']} {$row['name']}</td>
                                <td style='text-align: right; padding-right: 16px;'><a href='administration.php?productid={$row['id']}#productManagement'>Uredi</a></td>
                            </tr>";
                        }
                        echo "</tbody></table></div>";
                        ?>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET['productediterror'])) {
                            if ($_GET['productediterror'] == "none") {
                                echo "<p>Proizvod je uspješno ažuriran!</p>";
                            }
                        }
                        if (isset($_GET['productdelete'])) {
                            if ($_GET['productdelete'] == "success") {
                                echo "<p>Proizvod je uspješno uklonjen iz baze podataka!</p>";
                            }
                        }
                        if (isset($_GET['productid'])) {
                            $id = $_GET['productid'];
                            $sql = "SELECT * FROM products WHERE id = $id";
                            $result = mysqli_query($dbc, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if (isset($row['category'])) {
                                $productCategory = $row['category'];
                                echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete proizvod: <span style='font-weight: 600; color: var(--main-blue-color);'>{$row['manufacturer']} {$row['name']}</span></h2><a href='administration.php#productManagement' class='clear-link'><img class='close-icon' src='images/closeIcon.svg'></a></div>";
                                $includeProductForm = "php/productedit-forms/$productCategory.php";
                                include_once $includeProductForm;
                            }
                        }
                        ?>
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
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($dbc, $sql);

                        echo "<div class='user-table-div'><table class='user-edit'><thead>
                            <tr>
                                <th>ID</th>
                                <th>Korisnik</th>
                                <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                            </tr></thead><tbody>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']} {$row['surname']}</td>
                                <td style='text-align: right; padding-right: 16px;'><a href='administration.php?userid={$row['id']}#usersManagement'>Uredi</a></td>
                            </tr>";
                        }
                        echo "</tbody></table></div>";
                        ?>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET['userediterror'])) {
                            if ($_GET['userediterror'] == "none") {
                                echo "<p>Korisnički račun je uspješno ažuriran!</p>";
                            }
                        }
                        if (isset($_GET['userdelete'])) {
                            if ($_GET['userdelete'] == "success") {
                                echo "<p>Korisnički račun je uspješno uklonjen iz baze podataka!</p>";
                            }
                        }
                        if (isset($_GET['userid'])) {
                            $id = $_GET['userid'];
                            $sql = "SELECT * FROM users WHERE id = $id";
                            $result = mysqli_query($dbc, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete korisnički račun: <span style='font-weight: 600; color: var(--main-blue-color);'>{$row['name']} {$row['surname']}</span></h2><a href='administration.php#productManagement' class='clear-link'><img class='close-icon' src='images/closeIcon.svg'></a></div>";
                            include_once "php/edituserform.php";
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

                    echo "<tr><td style='width: 36px;'>";
                    foreach ($products_IDs_array as $product_ID) {
                        echo "<a style='all: unset; text-decoration: underline; cursor: pointer; color: var(--main-blue-color);' href='product.php?id={$product_ID}'>" . $product_ID . "</a><br>";
                    }
                    echo "</td><td style='width: 200px;'>";
                    foreach ($products_manufacturers_array as $product_manufacturer) {
                        echo $product_manufacturer . "<br>";
                    }
                    echo "</td><td style='width: 200px;'>";
                    foreach ($products_array as $product) {
                        echo $product . "<br>";
                    }
                    echo "</td><td style='width: 100px;'>";
                    foreach ($products_prices_array as $product_price) {
                        $product_price = number_format($product_price, 2, '.', ',');
                        echo $product_price . "€<br>";
                    }
                    echo "</td><td style='width: 100px;'>";
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
                    <tr>
                        <td style='color: var(--main-blue-color);' colspan='5'>Cijena ukupno</td>
                        <td style='text-align: right; color: var(--main-blue-color);'>{$total_price}€</td>
                    </tr>";
                    echo "</tbody></table></div></div></div>";
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

        <!-- Footer -->
        <section>
        </section>
        <a href="#" class="back-to-top"><img src="images/DropdownIcon.png" width="24"></a>
        <script type="text/javascript" src="js/main.js"></script>
    </div>
</body>

</html>