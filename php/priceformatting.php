<?php
$discountPrice = $regularPrice - ($regularPrice * $discount / 100);

if ($regularPrice == (int)$regularPrice) {
    $regularPrice = number_format($regularPrice, 0, '.', ',');
} else {
    $regularPrice = number_format($regularPrice, 2, '.', ',');
}

if ($discountPrice == (int)$discountPrice) {
    $discountPrice = number_format($discountPrice, 0, '.', ',');
} else {
    $discountPrice = number_format($discountPrice, 2, '.', ',');
}
