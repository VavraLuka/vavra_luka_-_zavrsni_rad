<?php
$discountPrice = $regularPrice - ($regularPrice * $discount / 100);
$regularPrice = number_format($regularPrice, 2, '.', ',');
$discountPrice = number_format($discountPrice, 2, '.', ',');
