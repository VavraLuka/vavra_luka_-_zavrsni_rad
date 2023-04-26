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
    <link rel="stylesheet" href="css/administration.css">
    <link rel="stylesheet" href="css/productupload-forms.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
</head>

<body>
    <div class="page-wrapper">
        <!-- Navigation bar -->
        <section class="background-grey" id="navigationBar">
            <div class="section-wrapper-navigation">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#usersManagement">Korisnički računi</a></li>
                    </ul>
                </div>
                <div class="main-logo">
                    <a href="index.php"><img src="images/mainLogo.png" width="160"></a>
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
                                echo "<div class='signup-paragraph'><p>Proizvod je uspješno dodan u bazu podataka!</p></div>";
                            }
                            echo "<br>";
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
                            echo '<h2 class="center-element">Unosite novi proizvod u kategoriji: ' . $productCategoryTitle . '</h2>';
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
                                <th>Uredi</th>
                            </tr></thead><tbody>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['manufacturer']} {$row['name']}</td>
                                <td><a href='administration.php?id={$row['id']}'>Uredi</a></td>
                            </tr>";
                        }
                        echo "</tbody></table></div>";
                        ?>
                    </div>
                    <div class="single-element-right">
                        <?php
                        if (isset($_GET["editerror"])) {
                            if ($_GET["editerror"] == "none") {
                                echo "<div class='signup-paragraph'><p>Proizvod je uspješno ažuriran!</p></div>";
                            }
                            echo "<br>";
                        }
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM products WHERE id = $id";
                            $result = mysqli_query($dbc, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if (isset($row['category'])) {
                                $productCategory = $row['category'];
                                echo "<h2 class='center-element'>Trenutno uređujete proizvod: {$row['manufacturer']} {$row['name']}</h2>";
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
                <h2>Upravljanje korisničkim računima iz baze podataka</h2>
                <hr>
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