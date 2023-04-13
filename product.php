<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location: pagenotfound.php");
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
                    if(isset($logo_file)){
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
                <h1 class='text-decoration-line'>€$discountPrice</h1>
                <h1>€$regularPrice</h1></div>";
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
            <form>
                <quantity select></quantity>
                <submit>
            </form>
        </div>
    </div>
</section>
<?php
include_once "footer.php";
?>