<?php
$starWidth = 18;
echo "<div class='star-reviews inline-block'>";

$half_stars = 0;

if ($review > 0) {
    $full_stars = floor($review);
    $decimal = fmod($review, 1);
    $decimal = intval($decimal * 10);

    for ($i = 1; $i <= $full_stars; $i++) {
        echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>";
    }
    if ($decimal != 0) {
        if ($decimal > 0 && $decimal < 5) {
            echo "<img src='images/quarterStarIcon.png' class='inline-block' width='$starWidth'>";
        } else if ($decimal == 5) {
            echo "<img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>";
        } else if ($decimal > 5 && $decimal <= 9) {
            echo "<img src='images/halfQuarterStarIcon.png' class='inline-block' width='$starWidth'>";
        }
        $half_stars = 1;
    }
    $empty_stars = 5 - $full_stars - $half_stars;
    for ($i = 1; $i <= $empty_stars; $i++) {
        echo "<img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>";
    }
    echo "<p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>$review ($reviewCount)</p>";
} else {
    echo "<p style='color: grey; font-weight: 300;'>Ovaj proizvod još nije ocijenjen</p>";
}
echo "</div>";