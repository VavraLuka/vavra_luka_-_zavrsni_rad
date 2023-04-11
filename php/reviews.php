<?php
echo "<div class='star-reviews inline-block'>";
if ($discount > 0) {
    echo "<p class='discount-text'>$discount% popusta</p>";
}
if ($review > 0 and $review <= 0.5) {
    echo "<img src='images/halfStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 0.5 and $review <= 1) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 1 and $review <= 1.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/halfStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 1.5 and $review <= 2) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 2 and $review <= 2.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/halfStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 2.5 and $review <= 3) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 3 and $review <= 3.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/halfStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 3.5 and $review <= 4) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/emptyStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 4 and $review <= 4.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/halfStarIcon.png' class='inline-block' width='12'>";
} else if ($review > 4.5) {
    echo "<img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>
        <img src='images/fullStarIcon.png' class='inline-block' width='12'>";
} else {
    echo "<p>Nema dostupnih ocjena</p>";
}
echo "</div>";
