<?php
$starWidth = 18;
echo "<div class='star-reviews inline-block'>";
if ($review > 0 and $review <= 0.5) {
    echo "<img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 0.5 and $review <= 1) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 1 and $review <= 1.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 1.5 and $review <= 2) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 2 and $review <= 2.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 2.5 and $review <= 3) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 3 and $review <= 3.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 3.5 and $review <= 4) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 4 and $review <= 4.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/halfStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else if ($review > 4.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'>
        <img src='images/fullStarIcon.png' class='inline-block' width='$starWidth'><p class='inline-block' style='margin-left: 6px; color: grey; font-weight: 300;'>($review)</p>";
} else {
    echo "<p style='color: grey; font-weight: 300;'>Ovaj proizvod još nije ocijenjen</p>";
}
echo "</div>";
