<?php
if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $message = $_POST["message"];
    $product = $_POST["product"];
    $rating = $_POST["rating"];
    echo $user;
    echo "<br>";
    echo $message;
    echo "<br>";
    echo $product;
    echo "<br>";
    echo $rating;
}