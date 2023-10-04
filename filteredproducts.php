<?php
require_once 'php/databaseconnect.php';
$productCategory = $_GET['productCategory'] ?? '';
$speakerType = $_GET['speakerType'] ?? '';
switch ($productCategory) {
    case "speakers":
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
                exit;
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
        exit;
}
if ($productCategory == "all") {
    $query = "SELECT COUNT(*) as count FROM products";
} else if ($speakerType) {
    $query = "SELECT COUNT(*) as count FROM products WHERE speakerType='$speakerType'";
} else {
    $query = "SELECT COUNT(*) as count FROM products WHERE category='$productCategory'";
}
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_assoc($result);
$productCategoryCount = $row['count'];

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
                        <?php
                        $sortingOptions = [
                            "popularity" => "Popularnost",
                            "availability" => "Dostupnost",
                            "pricedecrease" => "Cijena - viša prema nižoj",
                            "priceincrease" => "Cijena - niža prema višoj",
                            "bestrated" => "Najbolje ocijenjeno",
                            "nameaz" => "Naziv - A-Z",
                            "nameza" => "Naziv Z-A",
                            "newfirst" => "Najprije novi proizvodi",
                            "oldfirst" => "Najprije stari proizvodi"
                        ];
                        $selectedSort = isset($_GET['sort']) ? $_GET['sort'] : '';
                        echo '<option value="" disabled selected hidden>Sortiraj proizvode po:</option>';
                        foreach ($sortingOptions as $value => $label) {
                            $selected = ($selectedSort === $value) ? 'selected' : '';
                            echo "<option value='$value' $selected>$label</option>";
                        }
                        ?>
                    </select>
                    <?php
                    if (isset($_GET['productCategory'])) {
                        echo '<input type="hidden" name="productCategory" value="' . $_GET['productCategory'] . '">';
                    }
                    if (isset($_GET['speakerType'])) {
                        echo '<input type="hidden" name="speakerType" value="' . $_GET['speakerType'] . '">';
                    }
                    ?>
                    <input style="width: 97%;" type="submit" value="Sortiraj">
                </form><br>
            </div>
            <div class="manufacturers">
                <h1 class="sorting-title" style="letter-spacing: -1px;">Brand-ovi</h1><br>
                <?php
                $speakerTypeFilter = isset($_GET['speakerType']) ? "speakerType='{$_GET['speakerType']}'" : "1";
                $productCategoryFilter = ($_GET['productCategory'] == "all") ? "1" : "category='{$_GET['productCategory']}'";

                $sql = "SELECT manufacturer, COUNT(*) as count FROM products WHERE $speakerTypeFilter AND $productCategoryFilter GROUP BY manufacturer";
                $result = mysqli_query($dbc, $sql);

                echo "<form method='GET' action='filteredproducts.php'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    $manufacturer = $row['manufacturer'];
                    $count = $row['count'];
                    $manufacturerChecked = (isset($_GET['manufacturer']) && in_array($manufacturer, $_GET['manufacturer'])) ? 'checked' : '';

                    echo "<label class='checkbox-container'>
                <input type='checkbox' name='manufacturer[]' value='{$manufacturer}' $manufacturerChecked>
                <span class='custom-checkbox'></span>
                <p class='checkbox-input-text'>{$manufacturer} ({$count})</p>
              </label>";
                }
                $queryParams = ['productCategory', 'speakerType', 'sort'];
                foreach ($queryParams as $param) {
                    if (isset($_GET[$param])) {
                        $value = $_GET[$param];
                        echo "<input type='hidden' name='$param' value='$value'>";
                    }
                }
                echo "<br><input type='submit' style='width: 97%; display: block; margin: 0 auto;' value='Odaberi'></form>";
                ?>
            </div>

        </div>
        <div class="filtered-products-right">
            <?php
            $sortingOptions = [
                'popularity' => 'salesCount DESC',
                'availability' => 'quantity > 0',
                'pricedecrease' => 'price DESC',
                'priceincrease' => 'price ASC',
                'nameaz' => 'name ASC',
                'nameza' => 'name DESC',
                'newfirst' => 'id DESC',
                'oldfirst' => 'id ASC',
                'bestrated' => 'review DESC',
            ];

            $defaultSort = 'id DESC';
            $sort = isset($_GET['sort']) && isset($sortingOptions[$_GET['sort']]) ? $sortingOptions[$_GET['sort']] : $defaultSort;

            $productCategory = isset($_GET['productCategory']) ? ($_GET['productCategory'] == 'all' ? '1' : "category='{$_GET['productCategory']}'") : '1';

            $manufacturer = '';
            if (isset($_GET['manufacturer'])) {
                $manufacturerList = "'" . implode("', '", $_GET['manufacturer']) . "'";
                $manufacturer = "AND manufacturer IN ($manufacturerList)";
            }

            $sql = "SELECT * FROM products WHERE $productCategory $manufacturer ORDER BY $sort";

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
                    echo '<div class="filtered-product">
                            <div class="filtered-product-image" style="background-image:url(' . $imageURL . ');">
                            </div>
                            <div class="filtered-product-info position-relative">
                                <a class="product-link" href="product.php?id=' . $id . '">
                                    <div class="filtered-products-title">
                                        <h1 class="inline-block">' . $manufacturer . '</h1>
                                        <h2 class="inline-block">' . $name . '</h2>
                                    </div>
                                </a>';
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
                        <div class='bottom-div' style='justify-content: right;'>";
                    if ($quantity > 0) {
                        echo "<form style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/addtocart-process.php'>
                        <input type='hidden' name='product_id' value='$id'>
                        <input type='hidden' name='product_manufacturer' value='$manufacturer'>
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
                    if (isset($_SESSION['currentUserEmail'])) {
                        echo "<form style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/addtofavorites-process.php'>
                        <input type='hidden' name='productID' value='$id'>
                        <input type='hidden' name='currentLocation' value='{$_SERVER['REQUEST_URI']}'>
                        <input type='hidden' name='userEmail' value='{$_SESSION['currentUserEmail']}'>
                        <button style='all: unset;' type='submit' name='add_to_favorites'><img class='action-buttons' src='images/favoriteIcon.svg' width='36'></button>
                    </form>";
                    }
                    echo "</div>
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