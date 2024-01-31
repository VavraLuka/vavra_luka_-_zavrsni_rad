<div class="products-title" id="mostpopular">
    <h1>Top proizvodi</h1>
    <p>Najbolje ocijenjeni proizvodi</p>
</div>
<section class="products-section">
    <div class="products-wrapper">
        <?php
        require_once 'php/databaseconnect.php';

        $sql = "SELECT
        p.*,
            FORMAT(AVG(r.rating), 0) AS average_rating,
            COUNT(r.rating) AS rating_count
    FROM
        products p
    LEFT JOIN
        reviews r ON p.id = r.product
    GROUP BY
        p.id
    ORDER BY
        average_rating DESC
    LIMIT 4";

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
                $averageRating = $row['average_rating'];
                $ratingCount = $row['rating_count'];

                include 'php/priceformatting.php';

                echo "<div class='product-highlight'>
            <a href='product.php?id=$id'><div class='product-highlight-image' style='background-image: url($imageURL1)'></div></a>";
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