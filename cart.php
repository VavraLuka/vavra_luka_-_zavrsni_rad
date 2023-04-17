<?php
include_once "header.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$total_price = 0;
?>
<section class="section-wrapper" style="display: block;">
    <?php
    if (empty($_SESSION['cart'])) {
        echo '<div style="margin: 0 auto; width: 60%; text-align: center;"><img src="images/emptyCart.svg" width="240" style="margin: 0 auto; padding: 24px 0px;"><h1 style="padding-bottom: 24px;">Oh, čini se da je vaša košarica prazna!</h1></div>';
    } else {
    ?>
        <table class="cart-table">
            <thead style="font-size: 18px; letter-spacing: -1px;">
                <tr>
                    <th>Šifra proizvoda</th>
                    <th>Proizvod</th>
                    <th>Cijena</th>
                    <th>Količina</th>
                    <th>Ukupno</th>
                    <th>Ukloni proizvod</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION['cart'] as $item) {
                    $item_price = $item['product_price'] * $item['quantity'];
                    $total_price += $item_price;
                ?>
                    <tr>
                        <td><?php echo $item['product_id'] ?></td>
                        <td><?php echo $item['product_name'] ?></td>
                        <td><?php echo $item['product_price'] ?> €</td>
                        <td>
                            <form action="php/updatecart-process.php" method="post" autocomplete="off">
                                <input type="hidden" name="product_id" value="<?php echo $item['product_id'] ?>">
                                <input type="number" name="quantity" value="<?php echo $item['quantity'] ?>" min="1">
                                <input type="submit" name="update_quantity" value="Ažuriraj">
                            </form>
                        </td>
                        <td><?php echo $item_price ?> €</td>
                        <td>
                            <form action="php/removeproductfromcart-process.php" method="post" autocomplete="off">
                                <input type="hidden" name="product_id" value="<?php echo $item['product_id'] ?>">
                                <button type="submit" class="image-button"><img src="images/removeIcon.svg" width="36"></button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">Cijena ukupno</td>
                    <td><?php echo $total_price ?> €</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    <?php
    } ?>
</section>
<?php
include_once "footer.php";
?>