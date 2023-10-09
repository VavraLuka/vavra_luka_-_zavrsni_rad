<?php
if ($_SESSION['currentUserStatus'] == "admin") {
    $currentControlPanel = "administration";
} else if ($_SESSION['currentUserStatus'] == "coordinator") {
    $currentControlPanel = "logistics";
}
?>
<section id="productUpload">
    <div class="section-wrapper">
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Unos novog proizvoda u bazu podataka</h2>
                <form method="GET" action="<?php echo $currentControlPanel; ?>.php">
                    <select class="input-product-category" name="productCategory" id="productCategory">
                        <option value="" disabled selected hidden>Kategorija proizvoda</option>
                        <option value="speakers">Zvučnici</option>
                        <option value="amplifiers">Pojačala</option>
                        <option value="mixers">Miksete</option>
                        <option value="controllers">Kontroleri</option>
                        <option value="light">Rasvjeta</option>
                        <option value="cables">Kablovi</option>
                        <option value="adapters">Adapteri</option>
                        <option value="accessories">Dodatna oprema</option>
                        <option value="covers">Torbe</option>
                    </select>
                    <div class="form-button">
                        <input type="submit" name="submit" value="Dodaj proizvod">
                    </div>
                </form>
            </div>
            <div class="single-element-right">
                <?php
                if (isset($_GET["uploaderror"]) && $_GET["uploaderror"] == "none") {
                    echo "<p>Proizvod je uspješno dodan u bazu podataka!</p>";
                }
                if (isset($_GET['productCategory'])) {
                    $productCategory = $_GET['productCategory'];
                    $productCategoryTitle = getProductCategoryTitle($productCategory);
                    echo "<div style='display: flex; width: 100%; justify-content: space-between;'>";
                    echo "<h2>Unosite novi proizvod u kategoriji: <span style='font-weight: 600; color: var(--main-blue-color);'>$productCategoryTitle</span></h2>";
                    echo "<a href='$currentControlPanel.php#productUpload' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a>";
                    echo "</div>";
                    $includeProductForm = "php/productupload-forms/$productCategory.php";
                    include_once $includeProductForm;
                }
                function getProductCategoryTitle($category)
                {
                    $categoryTitles = [
                        'speakers' => 'Zvučnici',
                        'amplifiers' => 'Pojačala',
                        'mixers' => 'Miksete',
                        'controllers' => 'Kontroleri',
                        'light' => 'Rasvjeta',
                        'cables' => 'Kablovi',
                        'adapters' => 'Adapteri',
                        'accessories' => 'Dodatna oprema',
                        'covers' => 'Torbe',
                    ];
                    return isset($categoryTitles[$category]) ? $categoryTitles[$category] : '';
                }
                ?>
            </div>
        </div>
    </div>
</section>