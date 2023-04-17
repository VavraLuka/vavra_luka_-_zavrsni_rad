<?php
session_start();

$product_id = $_POST['product_id'];
$new_quantity = $_POST['quantity'];

foreach ($_SESSION['cart'] as &$item) {
    if ($item['product_id'] == $product_id) {
        $item['quantity'] = $new_quantity;
        break;
    }
}
header('location: ../cart.php');
exit;
?>