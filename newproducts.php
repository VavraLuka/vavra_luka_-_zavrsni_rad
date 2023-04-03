<section class="products-section">
    <div class="products-title">
        <h1>Novi proizvodi</h1>
        <p>Noviteti u našoj ponudi</p>
    </div>
</section>
<section class="products-section">
    <div class="products-wrapper">    
    <?php
    require_once 'php/databaseconnect.php';

    $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 5";
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

            echo "<div class='product'>
            <a><div class='image' style='background-image: url($imageURL)'></div></a>
            <a><h3>$manufacturer $name</h3></a>
            <a><h1>€$price</h1></a>
            </div>";
        }
    }
    ?>
    </div>
</section>