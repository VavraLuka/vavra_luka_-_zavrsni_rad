<?php
include_once 'header.php';
?>
<section>
    <div class="filtered-products-top">
        <h1>Tu ide naslov ovisno o odabranoj kategoriji</h1>
        <div class="sorting-button">
            <form class="sorting-form" action="index.php" method="GET">
                <label for="sort">Sortiraj proizvode po:</label>
                <select id="sort" name="sort">
                    <option value="" disabled selected hidden>Odaberite način sortiranja</option>
                    <option value="popularity">Popularnosti</option>
                    <option value="pricedecrease">Cijeni - viša prema nižoj</option>
                    <option value="priceincrease">Cijeni - niža prema višoj</option>
                    <option value="bestrated">Najbolje ocijenjeno</option>
                    <option value="nameaz">Nazivu - A-Z</option>
                    <option value="nameza">Nazivu - Z-A</option>
                    <option value="newfirst">Najprije novi proizvodi</option>
                </select>
                <input type="submit" value="Sortiraj">
            </form><br>
            <p>Uređaji su sortirani po
                <?php
                if (isset($_GET['sort'])) {
                    if ($_GET['sort'] == "popularity") {
                        echo "popularnosti";
                    }
                    if ($_GET['sort'] == "pricedecrease") {
                        echo "cijeni - viša prema nižoj";
                    }
                    if ($_GET['sort'] == "priceincrease") {
                        echo "cijeni - niža prema višoj";
                    }
                    if ($_GET['sort'] == "bestrated") {
                        echo "najboljoj ocijeni";
                    }
                    if ($_GET['sort'] == "nameaz") {
                        echo "nazivu - A-Z";
                    }
                    if ($_GET['sort'] == "nameza") {
                        echo "nazivu - Z-A";
                    }
                    if ($_GET['sort'] == "newfirst") {
                        echo "datumu objave - najprije novi proizvodi";
                    }
                }
                ?>.</p>
        </div>
    </div>
</section>
<section>
    <div class="filtered-product-bottom">
        <?php
        require_once 'php/databaseconnect.php';
        if (isset($_GET['speakerType'])) {
            $speakerType = $_GET['speakerType'];
            if (isset($_GET['sort'])) {
                if ($_GET['sort'] == 'popularity') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY id DESC";
                } else if ($_GET['sort'] == 'pricedecrease') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY price DESC";
                } else if ($_GET['sort'] == 'priceincrease') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY price ASC";
                } else if ($_GET['sort'] == 'nameaz') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY name ASC";
                } else if ($_GET['sort'] == 'nemaza') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY name DESC";
                } else if ($_GET['sort'] == 'newfirst') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY id DESC";
                } else if ($_GET['sort'] == 'bestrated') {
                    $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY id DESC";
                }
                // Best rated i Popularity trebam namjestiti
            } else {
                $sql = "SELECT * FROM speakers";
            }
        } else {
            $sql = "SELECT * FROM speakers WHERE speakerType=$speakerType ORDER BY id DESC";
        }
        $stmt = mysqli_stmt_init($dbc);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Greška: SQL statement.";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_array($result)) {
                $row_mountain_id = $row['id'];
                $id = $row['id'];
                $name = $row['name'];
                $manufacturer = $row['manufacturer'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $speakerType = $row['speakerType'];
                $drivers = $row['drivers'];
                $RMS = $row['RMS'];
                $maxPower = $row['maxPower'];
                $soundPressure = $row['soundPressure'];
                $minFrequency = $row['minFrequency'];
                $maxFrequency = $row['maxFrequency'];
                $dimensions = $row['dimensions'];
                $weight = $row['weight'];
                $imageURL = $row['imageURL'];

                echo "
                <div class='photo'>
                    <a class='image-link'><div id='planina$row_mountain_id' class='image' style='background-image: url($row_photo_url)'></div></a>
                    <a class='mountain-link'><h2>$row_photo_title</h2></a>
                    <a class='author-link'><h3>$row_photo_author</h3></a>
                </div>
                ";
            }
        }
        ?>
<?php
include_once 'footer.php';
?>