<?php
if (isset($_GET['manufacturer'])) {
    require_once "php/databaseconnect.php";
    $manufacturer = $_GET['manufacturer'];
    $sql = "SELECT * FROM manufacturers WHERE manufacturer = '$manufacturer'";
    $result = mysqli_query($dbc, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $description = $row['description'];
            $imageURL = $row['imageURL'];

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
        <img src="<?php echo $imageURL; ?>" width="360" alt="<?php echo $manufacturer . ' logo'; ?>">
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
                $imageURL = $row['imageURL'];
                $review = $row['review'];
                $reviewCount = $row['reviewCount'];

                include 'php/priceformatting.php';

                echo "<div class='manufacturer-product'>
            <a href='product.php?id=$id'><div class='manufacturer-product-image' style='background-image: url($imageURL)'></div></a>";
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