<?php
require_once 'php/databaseconnect.php';
if (isset($_GET['productCategory'])) {
    $productCategory = $_GET['productCategory'];
    $category = $productCategory;
    switch ($productCategory) {
        case "speakers":
            if (isset($_GET['speakerType'])) {
                $speakerType = $_GET['speakerType'];
                $categoryType = $speakerType;
                switch ($speakerType) {
                    case "speakerBundle":
                        $productCategoryTitle = "Kompleti zvučnika";
                        break;
                    case "activeSpeaker":
                        $productCategoryTitle = "Aktivni zvučnici";
                        break;
                    case "passiveSpeaker":
                        $productCategoryTitle = "Pasivni zvučnici";
                        break;
                    case "monitorSpeaker":
                        $productCategoryTitle = "Monitorski zvučnici";
                        break;
                    default:
                        header("location: pagenotfound.php");
                }
            } else {
                header("location: pagenotfound.php");
            }
            break;
        case "amplifiers":
            $productCategoryTitle = "Pojačala";
            break;
        case "mixers":
            $productCategoryTitle = "Miksete";
            break;
        case "controllers":
            $productCategoryTitle = "Kontroleri";
            break;
        case "light":
            $productCategoryTitle = "Rasvjeta";
            break;
        case "cables":
            $productCategoryTitle = "Kablovi";
            break;
        case "adapters":
            $productCategoryTitle = "Adapteri";
            break;
        case "accessories":
            $productCategoryTitle = "Dodatna oprema";
            break;
        case "covers":
            $productCategoryTitle = "Torbe";
            break;
        case "all":
            $productCategoryTitle = "Svi proizvodi";
            break;
        default:
            header("location: pagenotfound.php");
    }
    if (isset($categoryType)) {
        $result = mysqli_query($dbc, "SELECT COUNT(*) as count FROM products WHERE speakerType='$categoryType'");
    } else if ($productCategory == "all") {
        $result = mysqli_query($dbc, "SELECT COUNT(*) as count FROM products");
    } else {
        $result = mysqli_query($dbc, "SELECT COUNT(*) as count FROM products WHERE category='$category'");
    }
    $row = mysqli_fetch_assoc($result);
    $productCategoryCount = $row['count'];
} else {
    header("location: pagenotfound.php");
}
include_once 'header.php';
?>

<section>
    <div class="filtered-products-top">
        <?php
        echo '<div class="product-category-div"><h1 class="product-category-title" style="letter-spacing: -1px;">' . $productCategoryTitle . '</h1><h1 class="product-category-count">' . $productCategoryCount . '</h1></div>';
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
                                if ($sortingTitle == "availability") echo "Dostupnost";
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
                        <option value="availability">Dostupnost</option>
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
                        echo '<input type="hidden" name="productCategory" value="' . $_GET['productCategory'] . '">';
                    }
                    if (isset($_GET['speakerType'])) {
                        echo '<input type="hidden" name="speakerType" value="' . $_GET['speakerType'] . '">';
                    }
                    ?>
                    <input style="width: 85%;" type="submit" value="Sortiraj">
                </form><br>
            </div>
            <div class="manufacturers">
                <h1 class="sorting-title" style="letter-spacing: -1px;">Brand-ovi</h1><br>
                <?php
                if (isset($_GET['speakerType'])) {
                    $speakerType = $_GET['speakerType'];
                    $sql = "SELECT manufacturer, COUNT(*) as count FROM products WHERE speakerType='$speakerType' GROUP BY manufacturer";
                } else if ($_GET['productCategory'] == "all") {
                    $sql = "SELECT manufacturer, COUNT(*) as count FROM products GROUP BY manufacturer";
                } else {
                    $productCategory = $_GET['productCategory'];
                    $sql = "SELECT manufacturer, COUNT(*) as count FROM products WHERE category='$productCategory' GROUP BY manufacturer";
                }
                $result = mysqli_query($dbc, $sql);
                echo "<form method='GET' action='filteredproducts.php'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $manufacturer = $row['manufacturer'];
                    $count = $row['count'];
                    echo "<label class='checkbox-container'><input type='checkbox' name='manufacturer[]' value='{$manufacturer}'";
                    if (isset($_GET['manufacturer'])) {
                        $manufacturers = $_GET['manufacturer'];
                        if (in_array($manufacturer, $manufacturers)) {
                            echo "checked";
                        }
                    }
                    echo "><span class='custom-checkbox'></span>
                    <p class='checkbox-input-text'>{$manufacturer} ({$count})</p></label>";
                }
                if (isset($_GET['productCategory'])) {
                    $productCategory = $_GET['productCategory'];
                    echo '<input type="hidden" name="productCategory" value="' . $productCategory . '">';
                }
                if (isset($_GET['speakerType'])) {
                    $speakerType = $_GET['speakerType'];
                    echo '<input type="hidden" name="speakerType" value="' . $speakerType . '">';
                }
                if (isset($_GET['sort'])) {
                    $sort = $_GET['sort'];
                    echo '<input type="hidden" name="sort" value="' . $sort . '">';
                }
                echo "<br><input type='submit' style='width: 85%; display: block; margin: 0 auto;' value='Odaberi'></form>";
                ?>
            </div>
        </div>
        <div class="filtered-products-right">
            <?php
            $sortingOptions = array(
                'popularity' => 'salesCount DESC',
                'availability' => 'quantity > 0',
                'pricedecrease' => 'price DESC',
                'priceincrease' => 'price ASC',
                'nameaz' => 'name ASC',
                'nameza' => 'name DESC',
                'newfirst' => 'id DESC',
                'oldfirst' => 'id ASC',
                'bestrated' => 'review DESC'
            );
            $sorting = isset($_GET['sort']) && isset($sortingOptions[$_GET['sort']]) ? $sortingOptions[$_GET['sort']] : 'id DESC';

            // Postavljanje kategorije
            $productCategory = "category='all'";
            if (isset($_GET['productCategory'])) {
                $productCategory = isset($_GET['speakerType']) ? "speakerType='{$_GET['speakerType']}'" : "category='{$_GET['productCategory']}'";
            }
            // Postavljanje proizvođača
            if (isset($_GET['manufacturer'])) {
                $manufacturer = $_GET['manufacturer'];
                $manufacturer_string = implode('", "', $manufacturer);
                $manufacturer_string = '("' . $manufacturer_string . '")';
                $manufacturer = "manufacturer IN $manufacturer_string";
            } else {
                $manufacturer = "";
            }
            // Postavljanje finalnog statement-a
            if ($_GET['productCategory'] == "all") {
                if (isset($_GET['sort'])) {
                    if ($_GET['sort'] == "availability") {
                        if (isset($_GET['manufacturer'])) {
                            $sql = "SELECT * FROM products WHERE $manufacturer AND $sorting";
                        } else {
                            $sql = "SELECT * FROM products WHERE $sorting";
                        }
                    } else {
                        if (isset($_GET['manufacturer'])) {
                            $sql = "SELECT * FROM products WHERE $manufacturer ORDER BY $sorting";
                        } else {
                            $sql = "SELECT * FROM products ORDER BY $sorting";
                        }
                    }
                } else {
                    if (isset($_GET['manufacturer'])) {
                        $sql = "SELECT * FROM products WHERE $manufacturer ORDER BY $sorting";
                    } else {
                        $sql = "SELECT * FROM products ORDER BY $sorting";
                    }
                }
            } else {
                if (isset($_GET['sort'])) {
                    if ($_GET['sort'] == "availability") {
                        if (isset($_GET['manufacturer'])) {
                            $sql = "SELECT * FROM products WHERE $productCategory AND $manufacturer AND $sorting";
                        } else {
                            $sql = "SELECT * FROM products WHERE $productCategory AND $sorting";
                        }
                    } else {
                        if (isset($_GET['manufacturer'])) {
                            $sql = "SELECT * FROM products WHERE $productCategory AND $manufacturer ORDER BY $sorting";
                        } else {
                            $sql = "SELECT * FROM products WHERE $productCategory ORDER BY $sorting";
                        }
                    }
                } else {
                    if (isset($_GET['manufacturer'])) {
                        $sql = "SELECT * FROM products WHERE $productCategory AND $manufacturer ORDER BY $sorting";
                    } else {
                        $sql = "SELECT * FROM products WHERE $productCategory ORDER BY $sorting";
                    }
                }
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
                    $regularPrice = $row['price'];
                    $quantity = $row['quantity'];
                    $imageURL = $row['imageURL'];
                    $review = $row['review'];
                    $reviewCount = $row['reviewCount'];
                    $discount = $row['discount'];

                    include "php/priceformatting.php";

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
                        <div class="filtered-product-info position-relative">
                        <a class="product-link" href="product.php?id=' . $id . '"><div class="filtered-products-title">
                            <h1 class="inline-block">' . $manufacturer . '</h1>
                            <h2 class="inline-block">' . $name . '</h2>
                        </div></a>';
                    include "php/reviews.php";
                    echo "<div class='bottom-div'>
                        <p class='" . $availabilityStyle . "'>" . $availability . "</p>
                        </div>
                            </div>
                        <div class='filtered-actions position-relative'>
                            <div class='filtered-price'>";
                    if ($discount == 0) {
                        echo "<h1>€" . $regularPrice . "</h1>";
                    } else {
                        echo "<div style='display: flex; float: right;'><p class='discount-text' style='font-size: 24px; float: right; margin-right: 6px;'>" . $discount . "%</p><h1 class='text-decoration-line' style='font-size: 24px; float: right;'>€" . $regularPrice . "</h1></div><h1 style='clear: both;'>€" . $discountPrice . "</h>";
                    }

                    echo "</div>
                            <div class='bottom-div'>";
                    if ($quantity > 0) {
                        echo "<form style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/addtocart-process.php'>
                        <input type='hidden' name='product_id' value='$id'>
                        <input type='hidden' name='product_name' value='$name'>
                        <input type='hidden' name='product_quantity' value='$quantity'>
                        <input type='hidden' name='product_price' value='";
                        if ($discount > 0) {
                            echo $discountPrice;
                        } else {
                            echo $regularPrice;
                        };
                        echo "'>
                        <input type='hidden' name='quantity' value='1'>
                        <button style='all: unset;' type='submit' name='add_to_cart'><img class='action-buttons' src='images/cartIcon.svg' width='36'></button>
                    </form>";
                    }
                    echo "<img class='action-buttons' src='images/favoriteIcon.svg' width='36'>
                            </div>
                        </div>
                    </div>
                    ";
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>