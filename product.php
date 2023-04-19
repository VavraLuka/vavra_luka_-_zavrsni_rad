<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location: pagenotfound.php");
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

include_once "header.php";
require_once "php/databaseconnect.php";

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
$imageURL = $row["imageURL"];
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
$review = $row['review'];
$reviewCount = $row['reviewCount'];
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

$manufacturer_logos = array(
    "Behringer" => "behringer.gif",
    "Bose" => "bose.gif",
    "EV" => "ev.gif",
    "JBL" => "jbl.gif",
    "LD Systems" => "ldsystems.gif",
    "Millenium" => "millenium.gif",
    "pro snake" => "prosnake.gif",
    "QSC" => "qsc.gif",
    "Stairville" => "stairville.gif",
    "the box" => "thebox.gif",
    "the box pro" => "theboxpro.gif",
    "the sssnake" => "thesssnake.gif",
    "the t.bone" => "thetbone.gif",
    "Thomann" => "thomann.gif",
    "Numark" => "numark.gif",
    "Fun Generation" => "fungeneration",
    "the t.amp" => "thetamp.gif",
    "Allen & Heath" => "allenheath.gif",
);
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
                    <?php if ($review > 0) {
                        include 'php/reviews.php';
                    } else {
                        echo "<p>Ovaj proizvod još nije ocijenjen</p>";
                    } ?>
                </div>
                <?php
                if (isset($logo_file)) {
                    echo "<div class='manufacturer-logo'>
                            <img src='images/manufacturerLogos/$logo_file' width='100'>
                        </div>";
                }
                ?>
            </div>
            <div class="product-image" style="background-image: url('<?php echo $imageURL; ?>');">
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
                <input type="hidden" name="product_name" value="<?php echo $name; ?>">
                <input type="hidden" name="product_price" value="
                <?php if ($discount > 0) {
                    echo $discountPrice;
                } else {
                    echo $regularPrice;
                }; ?>">
                <input type="number" name="quantity" value="1">
                <input type="submit" name="add_to_cart" value="Dodaj u košaricu">
            </form>
        </div>
    </div>
    <?php
    if ($description != NULL) {
        echo "<div class='product-description' style='width: 50%, margin: 0 auto; text-align: left;'>
                    <h1>Opis proizvoda</h1>    
                    <p>$description</p>
                    </div>";
    };
    ?>
</section>
<?php
include_once "footer.php";
?>