<section class="products-section" id="mostpopular">
    <div class="products-title">
        <h1>Top proizvodi</h1>
        <p>Najbolje ocijenjeni proizvodi</p>
    </div>
</section>
<section class="products-section">
    <div class="products-wrapper">
        <?php
        require_once 'php/databaseconnect.php';

        $sql = "SELECT * FROM products ORDER BY review DESC LIMIT 4";
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

                echo "<div class='product-highlight'>
                <a href='product.php?id=$id'><div class='product-highlight-image' style='background-image: url($imageURL)'></div></a>";
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