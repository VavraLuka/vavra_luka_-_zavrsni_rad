<?php
session_start();

$product_id = $_POST['product_id'];

foreach ($_SESSION['cart'] as $index => $item) {
    if ($item['product_id'] == $product_id) {
        unset($_SESSION['cart'][$index]);
        break;
    }
}

header('location: ../cart.php');
exit;
?>