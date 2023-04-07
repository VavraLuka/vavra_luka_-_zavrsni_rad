<section class="products-section">
    <div class="products-title">
        <h1>Istaknuti proizvodi</h1>
        <p>Najbolje ocijenjeni proizvodi</p>
    </div>
</section>
<section class="products-section">
    <div class="products-wrapper">    
    <?php
    require_once 'php/databaseconnect.php';

    $sql = "SELECT * FROM products ORDER BY salesCount DESC LIMIT 5";
    $stmt = mysqli_stmt_init($dbc);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Greška: SQL statement.";
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $manufacturer = $row['manufacturer'];
            $price = $row['price'];
            $imageURL = $row['imageURL'];
            $salesCount = $row['salesCount'];

            echo "<div class='product-highlight'>
            <div class='product-highlight-image' style='background-image: url($imageURL)'></div>
            <h3>$manufacturer</h3>
            <h2>$name</h2>
            <h1>€$price</h1>
            <h3 class='salesCount'>5 zvijezdica</h3>
            </div>";
        }
    }
    ?>
    </div>
</section>