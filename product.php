<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location: pagenotfound.php");
    exit;
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

include_once "header.php";
require_once "php/databaseconnect.php";
include_once "php/manufacturer-logos.php";

$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($dbc, $sql);
$row = mysqli_fetch_assoc($result);

$category = $row["category"];
$name = $row["name"];
$manufacturer = $row["manufacturer"];
$price = $row["price"];
$quantity = $row["quantity"];
$speakerType = $row["speakerType"];
$drivers = $row["drivers"];
$RMS = $row["RMS"];
$maxPower = $row["maxPower"];
$soundPressure = $row["soundPressure"];
$minFrequency = $row["minFrequency"];
$maxFrequency = $row["maxFrequency"];
$dimensions = $row["dimensions"];
$weight = $row["weight"];
$imageURL1 = $row["imageURL1"];
$imageURL2 = $row["imageURL2"];
$imageURL3 = $row["imageURL3"];
$salesCount = $row["salesCount"];
$faders = $row["faders"];
$inputs = $row["inputs"];
$outputs = $row["outputs"];
$cableType = $row["cableType"];
$length = $row["length"];
$leftJack = $row["leftJack"];
$leftJackType = $row["leftJackType"];
$rightJack = $row["rightJack"];
$rightJackType = $row["rightJackType"];
$color = $row["color"];
$limiter = $row["limiter"];
$channels = $row["channels"];
$power = $row["power"];
$lightSource = $row["lightSource"];
$powerConsumption = $row["powerConsumption"];
$lightType = $row["lightType"];
$beamAngle = $row["beamAngle"];
$discount = $row["discount"];
$caseFor = $row["caseFor"];
$caseType = $row["caseType"];
$accessoryType = $row["accessoryType"];
$description = $row["description"];
$additionalLine1 = $row["additionalLine1"];
$additionalLineValue1 = $row["additionalLineValue1"];
$additionalLine2 = $row["additionalLine2"];
$additionalLineValue2 = $row["additionalLineValue2"];
$additionalLine3 = $row["additionalLine3"];
$additionalLineValue3 = $row["additionalLineValue3"];
$softwareSupport = $row['softwareSupport'];
$deckNumber = $row['deckNumber'];
$externalPowerSource = $row['externalPowerSource'];

$repetitiveSpecificationsStart = array('name', 'manufacturer');
$repetitiveSpecificationEnd = array('description', 'additionalLine1', 'additionalLineValue1', 'additionalLine2', 'additionalLineValue2', 'additionalLine3', 'additionalLineValue3');
$specificationsspeakers = array('speakerType', 'drivers', 'RMS', 'maxPower', 'soundPressure', 'minFrequency', 'maxFrequency', 'dimensions', 'weight');
$specificationamplifiers = array('limiter', 'channels', 'power', 'dimensions', 'weight');
$specificationmixers = array('faders', 'inputs', 'outputs', 'dimensions', 'weight');
$specificationcontrollers = array('softwareSupport', 'deckNumber', 'externalPowerSource', 'dimensions', 'weight');
$specificationlight = array('lightSource', 'lightType', 'beamAngle', 'powerConsumption', 'dimensions', 'weight');
$specificationcables = array('cableType', 'length', 'color', 'leftJack', 'leftJackType', 'rightJack', 'rightJackType');
$specificationadapters = array('length', 'color', 'leftJack', 'leftJackType', 'rightJack', 'rightJackType');
$specificationaccessories = array('accessoryType');
$specificationcovers = array('caseFor', 'color', 'caseType');

if (array_key_exists($manufacturer, $manufacturer_logos)) {
    $logo_file = $manufacturer_logos[$manufacturer];
}

?>
<section class="product-section">
    <div class="product-section-wrapper">
        <div class="product-title-image">
            <div class="product-title">
                <div>
                    <h1 class="manufacturer inline-block"><?php echo $manufacturer; ?></h1>
                    <h1 class="name inline-block"><?php echo $name; ?></h1>
                </div>
                <div class="reviews">
                    <?php
                    require_once "php/databaseconnect.php";
                    $countQuery = "SELECT COUNT(*) as count, AVG(rating) as average FROM reviews WHERE product = '$id'";
                    $result = $dbc->query($countQuery);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $ratingCount = $row['count'];
                        $averageRating = $row['average'];
                        $averageRating = round($averageRating, 1);
                    }
                    if ($ratingCount > 0) {
                        echo "<a href='#productRating'>";
                        include 'php/reviews.php';
                        echo "</a>";
                    } else {
                        echo "<p>Ovaj proizvod još nije ocijenjen</p>";
                    }
                    ?>
                </div>
                <?php
                if (isset($logo_file)) {
                    $image_path = "images/manufacturerLogos/$logo_file";
                    if (file_exists($image_path)) {
                        echo "<div class='manufacturer-logo'>
                <a style='all: unset; cursor: pointer;' href='manufacturerinfo.php?manufacturer=$manufacturer'><img src='$image_path' width='100'></a>
            </div>";
                    }
                }
                ?>
            </div>
            <div class="product-images">
                <?php
                if (isset($imageURL2) && isset($imageURL3)) {
                    echo "<div class='product-small-images'>
                        <img src='$imageURL1' onclick='productImageFunction(this)'>
                        <img src='$imageURL2' onclick='productImageFunction(this)'>
                        <img src='$imageURL3' onclick='productImageFunction(this)'>
                    </div>
                    <div class='product-image-container'>
                        <img id='mainImage' src='$imageURL1' onClick='openModal(this)'>
                    </div>";
                } else if (isset($imageURL1)) {
                    echo "<div style='text-align: center;'>
                    <img id='mainImage' height='480' src='$imageURL1' onClick='openModal(this)'>
                </div>";
                } else {
                    echo "<div style='text-align: center;'>
                    <img height='360' src='images/missingImage.svg'><br><br>
                    <p style='text-align: left;'>Čini se da ovaj proizvod nema dostupnu fotografiju za prikaz. Za pomoć kontaktirajte službu za korisnike.</p>
                </div>";
                }
                ?>
            </div>
        </div>

        <div class="product-action-price">
            <div>
                <?php
                if ($discount > 0) {
                    echo "<p class='discount-text'>$discount% popusta</p>";
                }
                $regularPrice = $price;
                $regularPrice = number_format($regularPrice, 2, '.', ',');
                if ($discount > 0) {
                    $discountPrice = $regularPrice - ($regularPrice * $discount / 100);
                    $discountPrice = number_format($discountPrice, 2, '.', ',');
                    echo "<div class='two-prices'>
                <h1 class='text-decoration-line'>€$regularPrice</h1>
                <h1>€$discountPrice</h1></div>";
                } else {
                    echo "<h1>€$regularPrice</h1>";
                }
                ?>
                <p>U cijenu je uključen PDV</p>
                <?php
                if ($quantity > 0) {
                    echo "<p class='filtered-available'>Proizvod je dostupan</p>";
                } else {
                    echo "<p class='filtered-not-available'>Proizvod trenutno nije dostupan</p>";
                }
                ?>
            </div>
            <div class="product-specifications">
                <?php include_once "php/productdescription.php"; ?>
            </div>
            <form method="post" action="php/addtocart-process.php">
                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                <input type="hidden" name="product_manufacturer" value="<?php echo $manufacturer; ?>">
                <input type="hidden" name="product_name" value="<?php echo $name; ?>">
                <input type="hidden" name="product_quantity" value="<?php echo $quantity; ?>">
                <input type="hidden" name="product_price" value="
                <?php if ($discount > 0) {
                    echo $discountPrice;
                } else {
                    echo $regularPrice;
                }; ?>">
                <label for="quantity">Količina</label><br>
                <input type="number" name="quantity" value="1" min="1" max="<?php echo $quantity; ?>" oninvalid="this.setCustomValidity('Trenutno raspoloživa količina ovog proizvoda: <?php echo $quantity; ?>')" oninput="this.setCustomValidity('')">
                <input type="submit" name="add_to_cart" value="Dodaj u košaricu">
            </form>
            <p style="color: grey; font-weight: 300;">Šifra proizvoda: <?php echo $id; ?></p>
            <a href="help.php?product=<?php echo $id; ?>#contactForm">
                <p style="color: var(--main-blue-color); font-weight: 400; margin-top: 8px;">Pošaljite upit za ovaj proizvod</p>
            </a>
        </div>
    </div>
    <?php
    if ($description != NULL) {
        echo "<div style='width: 75%; margin: 0 auto; padding-top: 24px; text-align: left;'>
                    <h1 style='padding-bottom: 16px; font-size: var(--h1-laptop); letter-spacing: -1px;'>Opis proizvoda</h1>    
                    <p style='line-height: 1.5;'>$description</p>
                    </div>";
    };
    ?>
    <br>
    <div class="products-title ratings-title" style="text-align: left; width: 75%;">
        <div class="ratings-left">
            <h1 id="productRating">Ocjene proizvoda</h1>
            <?php
            include 'php/reviews.php';
            ?>
        </div>
        <div class="ratings-right">
            <form method="GET" action="product.php" onsubmit="redirectToProductRating()">
                <input type="number" id="id" name="id" value="<?php echo $id; ?>" hidden>
                <select id="sort" name="sort" class="ratingsSortSelect">
                    <option value="" disabled selected>Sortirajte recenzije:</option>
                    <option value="highest">Najviše ocjene</option>
                    <option value="lowest">Najniže ocjene</option>
                </select>
                <input style="width: 200px; padding: 8px 0px; border-radius: 0; margin-left: 14px;" type="submit" value="Sortiraj">
            </form>

            <script>
                function redirectToProductRating() {
                    event.preventDefault();
                    var selectedSort = document.getElementById("sort").value;
                    var url = "product.php?id=<?php echo $id; ?>&sort=" + selectedSort + "#productRating";
                    window.location.href = url;
                }
            </script>
        </div>
    </div><br>
    <div style='width: 75%; margin: 0 auto; padding-top: 24px; text-align: left;'>
        <?php
        require_once 'php/databaseconnect.php';

        if (isset($_GET["sort"])) {
            if ($_GET["sort"] == "highest") {
                $sql = "SELECT * FROM reviews WHERE product = '$id' ORDER BY rating DESC";
            }
            if ($_GET["sort"] == "lowest") {
                $sql = "SELECT * FROM reviews WHERE product = '$id' ORDER BY rating ASC";
            }
        } else {
            $sql = "SELECT * FROM reviews WHERE product = '$id'";
        }
        $stmt = mysqli_stmt_init($dbc);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Greška: SQL statement.";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_array($result)) {
                $user = $row["user"];
                $message = $row["message"];
                $rating = $row["rating"];
                $randomNumber = rand(1, 10);
                echo "<div class='review-box'>
                    <div class='review-box-left'>
                        <h1>$user</h1>
                        <p>$message<p>
                    </div>
                    <div class='review-box-right'>";
                $starWidth = 24;
                echo "<div class='star-reviews inline-block'>";

                $half_stars = 0;

                if ($rating > 0) {
                    $full_stars = floor($rating);
                    $decimal = fmod($rating, 1);
                    $decimal = intval($decimal * 10);

                    for ($i = 1; $i <= $full_stars; $i++) {
                        echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>";
                    }
                    if ($decimal != 0) {
                        if ($decimal > 0 && $decimal < 5) {
                            echo "<img src='images/quarterStarIcon.png' class='inline-block' width='$starWidth'>";
                        } else if ($decimal == 5) {
                            echo "<img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>";
                        } else if ($decimal > 5 && $decimal <= 9) {
                            echo "<img src='images/halfQuarterStarIcon.png' class='inline-block' width='$starWidth'>";
                        }
                        $half_stars = 1;
                    }
                    $empty_stars = 5 - $full_stars - $half_stars;
                    for ($i = 1; $i <= $empty_stars; $i++) {
                        echo "<img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>";
                    }
                } else {
                    echo "<p style='color: grey; font-weight: 300;'>Ovaj proizvod još nije ocijenjen</p>";
                }
                echo "</div>";
                echo "
                    </div>
                </div>";
            }
        }
        ?>
    </div>

    <div class="products-title">
        <h1>Slični proizvodi</h1>
    </div>
    <section class="products-section">
        <div class="products-wrapper">
            <?php
            require_once 'php/databaseconnect.php';

            $sql = "SELECT * FROM products WHERE category = '$category' ORDER BY RAND() LIMIT 4";
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
                    $regularPrice = $row['price'];
                    $discount = $row['discount'];
                    $imageURL1 = $row['imageURL1'];

                    include 'php/priceformatting.php';

                    echo "<div class='product-highlight'>
                <a href='product.php?id=$id'><div class='product-highlight-image' style='background-image: url($imageURL1)'></div></a>";
                    echo "<h3>$manufacturer</h3>
                <h2>$name</h2>";
                    if ($discount > 0) {
                        echo "<h1 class='text-decoration-line right'>€$regularPrice</h1>
                    <h1>€$discountPrice</h1>";
                        echo "<p class='discount-text float-right'>$discount% popusta</p>";
                    } else {
                        echo "<h1>€$regularPrice</h1>";
                    }
                    echo "</div>";
                }
            }
            ?>
        </div>
    </section>

    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        function productImageFunction(smallImage) {
            var fullImage = document.getElementById("mainImage");
            fullImage.src = smallImage.src;
        }
        
        function openModal(img) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("modalImage");

            modal.style.display = "flex";
            modalImg.src = img.src;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>

    <?php
    include_once "footer.php";
    ?>