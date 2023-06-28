<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['order_confirm'])) {
    $products_IDs = "";
    $products = "";
    $products_manufacturers = "";
    $products_prices = "";
    $products_quantities = "";
    $products_total_prices = "";
    $total_price = 0;
    $currentUserName = $_SESSION['currentUserName'];
    $currentUserSurname = $_SESSION['currentUserSurname'];
    $currentUserEmail = $_SESSION['currentUserEmail'];
    $currentUserState = $_SESSION['currentUserState'];
    $submit_date = date('Y-m-d');
    $submit_time = date('H:i:s');

    include_once "databaseconnect.php";

    foreach ($_SESSION['cart'] as $item) {
        $item_price = $item['product_price'] * $item['quantity'];
        $total_price += $item_price;
        $products .= $item['product_name'] . ",";
        $products_IDs .= $item['product_id'] . ",";
        $products_manufacturers .= $item['product_manufacturer'] . ",";
        $products_prices .= $item['product_price'] . ",";
        $products_quantities .= $item['quantity'] . ",";
        $products_total_prices .= $item_price . ",";
    }

    if ($currentUserState == "Hrvatska") {
        $shipping_price = 8;
    } else {
        $shipping_price = 16;
    }
    if($total_price < 150) {
        $total_price = $total_price + $shipping_price;
    }

    $products = substr($products, 0, -1);
    $products_IDs = substr($products_IDs, 0, -1);
    $products_manufacturers = substr($products_manufacturers, 0, -1);
    $products_prices = substr($products_prices, 0, -1);
    $products_quantities = substr($products_quantities, 0, -1);
    $products_total_prices = substr($products_total_prices, 0, -1);

    $query = "INSERT INTO orders (userName, userSurname, userEmail, total_price, products, products_IDs, products_manufacturers, products_prices, products_quantities, products_total_prices, submit_date, submit_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($statement, "sssissssssss", $currentUserName, $currentUserSurname, $currentUserEmail, $total_price, $products, $products_IDs, $products_manufacturers, $products_prices, $products_quantities, $products_total_prices, $submit_date, $submit_time);
    mysqli_stmt_execute($statement);

    foreach ($_SESSION['cart'] as $item) {
        $productID = $item['product_id'];
        $orderedQuantity = $item['quantity'];

        $sql = "SELECT quantity FROM products WHERE id = $productID";
        $result = $dbc->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentQuantity = $row["quantity"];
        } else {
            echo "Proizvod nije pronađen.";
        }
        $newQuantity = $currentQuantity - $orderedQuantity;
        $updateSql = "UPDATE products SET quantity = $newQuantity WHERE id = $productID";
        if ($dbc->query($updateSql) === TRUE) {
            echo "Proizvod uspješno ažuriran.";
        }
    }

    unset($_SESSION['cart']);
    header("location: ../cart.php?order=successfull");
}
