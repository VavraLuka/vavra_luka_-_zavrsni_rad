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
                        <option value="" disabled selected hidden>Sortiraj proizvode po:</option>
                        <option value="popularity">Popularnosti</option>
                        <option value="pricedecrease">Cijeni - viša prema nižoj</option>
                        <option value="priceincrease">Cijeni - niža prema višoj</option>
                        <option value="bestrated">Najbolje ocijenjeno</option>
                        <option value="nameaz">Nazivu - A-Z</option>
                        <option value="nameza">Nazivu - Z-A</option>
                        <option value="newfirst">Najprije novi proizvodi</option>
                        <option value="oldfirst">Najprije stari proizvodi</option>
                    </select>
                    <input type="submit" value="Sortiraj">
                </form><br>
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
                } else if ($_GET['sort'] == 'nemaza') {
                    $sorting = "name DESC";
                } else if ($_GET['sort'] == 'newfirst') {
                    $sorting = "id DESC";
                } else if ($_GET['sort'] == 'bestrated') {
                    $sorting = "id DESC";
                }
            } else {
                $sorting = "id DESC";
            }
            if (isset($_GET['productCategory'])) {
                $productCategory = $_GET['productCategory'];
                if (isset($_GET['speakerType'])) {
                    $productCategoryType = $_GET['speakerType'];
                    $sql = "SELECT * FROM products WHERE speakerType=$productCategoryType ORDER BY $sorting";
                } else {
                    $sql = "SELECT * FROM products WHERE category=$productCategory ORDER BY $sorting";
                }
            } else {
                $sql = "SELECT * FROM products WHERE category=$productCategory ORDER BY id DESC";
            }
            $stmt = mysqli_stmt_init($dbc);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
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

                    echo "
                <div class='photo'>
                    <a class='image-link'><div id='planina$row_mountain_id' class='image' style='background-image: url($row_photo_url)'></div></a>
                    <a class='mountain-link'><h2>$row_photo_title</h2></a>
                    <a class='author-link'><h3>$row_photo_author</h3></a>
                </div>
                ";
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>