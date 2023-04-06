<?php
include_once 'header.php';
?>
<section>
    <div class="filtered-products-top">
        <?php
        require_once 'php/databaseconnect.php';
        if (isset($_GET['productCategory'])) {
            $productCategory = $_GET['productCategory'];
            $category = $productCategory;
            if ($productCategory == "speakers") {
                if (isset($_GET['speakerType'])) {
                    $speakerType = $_GET['speakerType'];
                    $categoryType = $speakerType;
                    if ($speakerType == "speakerBundle") {
                        $productCategoryTitle = "Kompleti zvučnika";
                    } else if ($speakerType == "activeSpeaker") {
                        $productCategoryTitle = "Aktivni zvučnici";
                    } else if ($speakerType == "passiveSpeaker") {
                        $productCategoryTitle = "Pasivni zvučnici";
                    } else if ($speakerType == "monitorSpeaker") {
                        $productCategoryTitle = "Monitorski zvučnici";
                    }
                }
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
            } else if ($productCategory == "covers") {
                $productCategoryTitle = "Torbe";
            } else {
                header("location: pagenotfound.php");
            }
            if (isset($categoryType)) {
                $result = mysqli_query($dbc, "SELECT COUNT(*) as count FROM products WHERE speakerType='$categoryType'");
            } else {
                $result = mysqli_query($dbc, "SELECT COUNT(*) as count FROM products WHERE category='$category'");
            }
            $row = mysqli_fetch_assoc($result);
            $productCategoryCount = $row['count'];

            echo '<div class="product-category-div"><h1 class="product-category-title">' . $productCategoryTitle . '</h1><h1 class="product-category-count">' . $productCategoryCount . '</h1></div>';
        }
        ?>
        <hr>
        <div class="filtered-products-left">
            <div class="sorting-button">
                <form class="sorting-form" action="filteredproducts.php" method="GET">
                    <select id="sort" name="sort">
                        <option value="" disabled selected hidden>
                            <?php
                            if (isset($_GET['sort'])) {
                                $sortingTitle = $_GET['sort'];
                                if ($sortingTitle == "popularity") echo "Popularnost";
                                if ($sortingTitle == "pricedecrease") echo "Cijena - viša prema nižoj";
                                if ($sortingTitle == "priceincrease") echo "Cijena - niža prema višoj";
                                if ($sortingTitle == "bestrated") echo "Najbolje ocijenjeno";
                                if ($sortingTitle == "nameaz") echo "Naziv - A-Z";
                                if ($sortingTitle == "nameza") echo "Naziv Z-A";
                                if ($sortingTitle == "newfirst") echo "Najprije novi proizvodi";
                                if ($sortingTitle == "oldfirst") echo "Najprije stari proizvodi";
                            } else {
                                echo "Sortiraj proizvode po:";
                            }
                            ?>
                        </option>
                        <option value="popularity">Popularnost</option>
                        <option value="pricedecrease">Cijena - viša prema nižoj</option>
                        <option value="priceincrease">Cijena - niža prema višoj</option>
                        <option value="bestrated">Najbolje ocijenjeno</option>
                        <option value="nameaz">Naziv - A-Z</option>
                        <option value="nameza">Naziv - Z-A</option>
                        <option value="newfirst">Najprije novi proizvodi</option>
                        <option value="oldfirst">Najprije stari proizvodi</option>
                    </select>
                    <?php
                    if (isset($_GET['productCategory'])) {
                        $productCategory = $_GET['productCategory'];
                        echo '<input type="hidden" name="productCategory" value="' . $productCategory . '">';
                    }
                    if (isset($_GET['speakerType'])) {
                        $speakerType = $_GET['speakerType'];
                        echo '<input type="hidden" name="speakerType" value="' . $speakerType . '">';
                    }
                    ?>
                    <input type="submit" value="Sortiraj">
                </form><br>
            </div>
            <div class="manufacturers">
                <h1 class="sorting-title">Brand-ovi</h1>
                <?php
                $sql = "SELECT manufacturer, COUNT(*) as count FROM products GROUP BY manufacturer";
                $result = mysqli_query($dbc, $sql);
                echo "<ul class='manufacturer-list'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $manufacturer = $row['manufacturer'];
                    $count = $row['count'];
                    # echo "<li>
                    # <input type='checkbox' id='{$manufacturer}' name='{$manufacturer}'>
                    # <label for='{$manufacturer}'>{$manufacturer} ({$count})</label>
                    # </li>";
                    echo "<li>{$manufacturer} ({$count})</li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>
        <div class="filtered-products-right">
            <?php
            if (isset($_GET['sort'])) {
                if ($_GET['sort'] == 'popularity') {
                    $sorting = "id DESC"; // sada prikazuje najnovije
                } else if ($_GET['sort'] == 'pricedecrease') {
                    $sorting = "price DESC";
                } else if ($_GET['sort'] == 'priceincrease') {
                    $sorting = "price ASC";
                } else if ($_GET['sort'] == 'nameaz') {
                    $sorting = "name ASC";
                } else if ($_GET['sort'] == 'nameza') {
                    $sorting = "name DESC";
                } else if ($_GET['sort'] == 'newfirst') {
                    $sorting = "id DESC";
                } else if ($_GET['sort'] == 'oldfirst') {
                    $sorting = "id ASC";
                } else if ($_GET['sort'] == 'bestrated') {
                    $sorting = "id DESC";
                }
            } else {
                $sorting = "id DESC";
            }
            if (isset($_GET['productCategory'])) {
                $productCategory = $_GET['productCategory'];
                if (isset($_GET['speakerType'])) {
                    $productCategory = $_GET['speakerType'];
                    $sql = "SELECT * FROM products WHERE speakerType='$productCategory' ORDER BY $sorting";
                } else {
                    $sql = "SELECT * FROM products WHERE category='$productCategory' ORDER BY $sorting";
                }
            } else {
                $sql = "SELECT * FROM products WHERE category='$productCategory' ORDER BY id DESC";
            }
            $stmt = mysqli_stmt_init($dbc);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                $error = mysqli_stmt_error($stmt);
                echo "Error: " . $error;
                echo "Greška: SQL statement.";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $manufacturer = $row['manufacturer'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    $imageURL = $row['imageURL'];

                    if ($quantity > 0) {
                        $availability = "Dostupno na stanju";
                        $availabilityStyle = "filtered-available";
                    } else {
                        $availability = "Trenutno nije dostupno";
                        $availabilityStyle = "filtered-not-available";
                    }
                    echo '
                    <div class="filtered-product">
                        <div class="filtered-product-image" style="background-image:url(' . $imageURL . ');">
                        </div>
                        <div class="filtered-product-info">
                        <div>
                            <h1 class="inline-block">' . $manufacturer . '</h1>
                            <h2 class="inline-block">' . $name . '</h2>
                        </div>
                        <div>
                        <p class="' . $availabilityStyle . '">' . $availability . '</p>
                        </div>
                            </div>
                        <div class="filtered-actions">
                            <div class="filtered-price">
                                <h1>€' . $price . '</h1>
                            </div>
                            <div class="filtered-buttons">
                                <p>Dodaj u košaricu</p>
                                <p>Dodaj u favorite</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>