<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_manufacturer = $_POST['product_manufacturer'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $product_quantity = $_POST['product_quantity'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = array(
            'product_id' => $product_id,
            'product_manufacturer' => $product_manufacturer,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity,
            'product_quantity' => $product_quantity
        );
    }

    header('location: ../cart.php');
    exit;
}
?>