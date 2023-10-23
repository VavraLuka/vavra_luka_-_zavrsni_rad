<div class="products-title" id="mostsales">
    <h1>Najprodavaniji proizvodi</h1>
    <p>Povjerenje naših kupaca</p>
</div>
<section class="products-section">
    <div class="products-wrapper">
        <?php
        require_once 'php/databaseconnect.php';

        $sql = "SELECT * FROM products ORDER BY salesCount DESC LIMIT 4";
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
                $salesCount = $row['salesCount'];

                include 'php/priceformatting.php';

                echo "<div class='product-highlight'>
            <a href='product.php?id=$id'><div class='product-highlight-image' style='background-image: url($imageURL1)'></div></a>
            <h3 class='salesCount'>$salesCount prodaja</h3>";
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