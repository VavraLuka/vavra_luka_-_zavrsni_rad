<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Audio trgovina</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/signin.css">
    <link rel="stylesheet" href="styles/signup.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/catalog.css">
    <link rel="stylesheet" href="styles/myprofile.css">
    <meta charset="UTF-8">
</head>
<body>
    <div class="page-wrapper">
        <!-- Section 01 -->
        <section class="background-grey">
            <div class="section-wrapper">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="contactus.php">Kontaktiraj nas</a></li>
                        <li><a href="aboutus.php">O nama</a></li>
                    </ul>
                </div>
                <div class="box main-logo">
                    <p><a href="index.php">Logo</a></p>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="warranty.php">3 godine jamstva</a></li>
                        <li><a href="returns.php">Povrat robe</a></li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="box">
                    <ul class="bold-text text-black">
                        <li><a href="#topdeals">Top ponude</a></li>
                        <li><a href="#new">Novo</a></li>
                        <li><a href="#mostpopular">Najprodavanije</a></li>
                    </ul>
                </div>
                <div class="box search-bar">
                    <p>Search bar</p>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="#currencychange">Odabir valute</a></li>
                        <li><a href="#favorites">Favoriti</a></li>
                        <li><a href="#cart">Košarica</a></li>
                        <?php
                        if (isset($_SESSION["currentUserName"])) {
                            if (isset($_SESSION["currentUserStatus"])) {
                                if ($_SESSION["currentUserStatus"] === 1) {
                                    echo "<li><a href='administration.php'>Administracija</a></li>";
                                } else {
                                    echo "<li><a href='#myprofile'>Profil</a></li>";
                                }
                            } else {
                                echo "<li><a href='#myprofile'>Profil</a></li>";
                            }
                            echo "<li><a href='php/signout-process.php'>Odjava</a></li>";
                        } else {
                            echo "<li><a href='signin.php'>Prijava</a></li>";
                            echo "<li><a href='signup.php'>Registracija</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 02 -->
        <section class="background-black">
            <div class="section-wrapper">
                <ul class="text-white">
                    <li><a href="#activespeakers">Kompleti razglasa</a></li>
                    <li><a href="#activespeakers">Aktivni zvučnici</a></li>
                    <li><a href="#activespeakers">Pasivni zvučnici</a></li>
                    <li><a href="#activespeakers">Monitorski zvučnici</a></li>
                    <li><a href="#activespeakers">Pojačala</a></li>
                    <li><a href="#activespeakers">Miksete</a></li>
                    <li><a href="#activespeakers">Rasvjeta</a></li>
                    <li><a href="#activespeakers">Kablovi</a></li>
                    <li><a href="#activespeakers">Adapteri</a></li>
                    <li><a href="#activespeakers">Dodatna oprema</a></li>
                    <li><a href="#activespeakers">Torbe</a></li>
                </ul>
            </div>
        </section>

        <!-- Section 03 -->
        <section class="background-white text-black">
            <div class="greeting-message">
                <?php
                if (isset($_SESSION["currentUserName"])) {
                    $currentUserName = $_SESSION["currentUserName"];
                    echo "<h1 class='block'>Pozdrav, $currentUserName!</h1>";
                    echo "<img class='block vertical-center padding-left' src='images/Wave.png' width='42'>";
                } else {
                    echo "<h1 class='block'>Dobrodošli u online shop kvalitetne audio opreme!</h1>";
                    echo "<img class='block vertical-center padding-left' src='images/Wave.png' width='42'>";
                }
                ?>
            </div>
        </section>