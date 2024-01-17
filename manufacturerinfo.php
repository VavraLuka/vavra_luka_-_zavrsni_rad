<?php
if (isset($_GET['manufacturer'])) {
    require_once "php/databaseconnect.php";
    $manufacturer = $_GET['manufacturer'];
    $sql = "SELECT * FROM manufacturers WHERE manufacturer = '$manufacturer'";
    $result = mysqli_query($dbc, $sql);
    include_once "php/manufacturer-logos.php";
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $description = $row['description'];
            $image = "images/manufacturerLogos/$manufacturer_logos_hq[$manufacturer]";

            include_once "header.php";
            mysqli_free_result($result);
        } else {
            header("location: pagenotfound.php");
            exit;
        }
    }
}

?>
<section class="background-white">
    <div class="section-wrapper-help">
        <br><img src="<?php echo $image; ?>" height="220" alt="<?php echo $manufacturer . ' logo'; ?>" alt="<?php echo $manufacturer; ?> logo"><br><br>
        <h1 style="letter-spacing: -1px;"><?php echo '<span style="font-weight: 300;">O proizvođaču</span> ' . $manufacturer; ?></h1>
        <p class="line-height"><?php echo $description; ?></p>
    </div>
</section>
<section class="background-white">
    <h1 style="letter-spacing: -1px; text-align: center; margin-bottom: 36px;"><?php echo "<span style='font-weight: 300;'>Proizvodi proizvođača</span> " . $manufacturer; ?></h1>
    <div class="manufacturer-products-wrapper">
        <?php
        $sql = "SELECT * FROM products WHERE manufacturer = '$manufacturer'";
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
                $imageURL = $row['imageURL1'];

                include 'php/priceformatting.php';

                echo "<div class='manufacturer-product'>
            <a href='product.php?id=$id'><div class='manufacturer-product-image' style='background-image: url($imageURL)'></div></a>";
                $countQuery = "SELECT COUNT(*) as count, AVG(rating) as average FROM reviews WHERE product = '$id'";
                $result2 = $dbc->query($countQuery);
                if ($result2->num_rows > 0) {
                    $row = $result2->fetch_assoc();
                    $ratingCount = $row['count'];
                    $averageRating = $row['average'];
                    $averageRating = round($averageRating, 1);
                };
                include 'php/reviews.php';
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
<?php
include_once "footer.php";
?>