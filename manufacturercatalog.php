<?php
include_once "header.php";
include_once "php/manufacturer-logos.php";
?>
<section>
    <div class="section-wrapper-categories">
        <h1 class="main-title" style="letter-spacing: -1px;">Marke i proizvođači</h1>
        <div class="categories-wrapper">
            <?php
            include_once 'php/databaseconnect.php';
            $sql = "SELECT * FROM manufacturers";
            $result = mysqli_query($dbc, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $manufacturer = $row['manufacturer'];
                $image = "images/manufacturerLogos/" . $manufacturer_logos[$manufacturer];
                echo "<div class='product-category'>
                <img src='$image' width='90'>
                <a href='manufacturerinfo.php?manufacturer=$manufacturer'><h3>$manufacturer</h3></a>
            </div>";
            }
            ?>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>