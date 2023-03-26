<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Audio trgovina</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/myprofile.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/warranty.css">
    <link rel="stylesheet" href="css/filteredproducts.css">
    <link rel="stylesheet" href="css/returns.css">
    <link rel="stylesheet" href="css/shipingcostsanddeliverytimes.css">
    <link rel="stylesheet" href="css/paymentoptions.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>

<body>
    <div class="page-wrapper">
        <!-- Section 01 -->
        <section class="background-grey">
            <div class="section-wrapper">
                <div class="box">
                    <div class="inner-box">
                        <ul class="text-black">
                            <li><a href="contactus.php">Kontaktiraj nas</a></li>
                            <li><a href="aboutus.php">O nama</a></li>
                        </ul>
                    </div>
                    <div class="inner-box">
                        <ul class="bold-text text-black">
                            <li><a href="#topdeals">Top ponude</a></li>
                            <li><a href="#new">Novo</a></li>
                            <li><a href="#mostpopular">Najprodavanije</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box main-logo">
                    <p><a href="index.php"><img src="images/mainLogo.png" width="180"></a></p>
                </div>
                <div class="box">
                    <div class="inner-box">
                        <ul class="float-right text-black">
                            <li><a href="warranty.php">3 godine jamstva</a></li>
                            <li><a href="returns.php">Povrat robe</a></li>
                        </ul>
                    </div>
                    <div class="inner-box">
                        <ul class="float-right text-black">
                            <li><a href="#currencychange">Odabir valute</a></li>
                            <li><a href="#cart">Košarica</a></li>
                            <?php
                            if (isset($_SESSION["currentUserName"])) {
                                if (isset($_SESSION["currentUserStatus"])) {
                                    if ($_SESSION["currentUserStatus"] === 1) {
                                        echo "<li><a href='administration.php'>Administracija</a></li>";
                                    } else {
                                        echo "<li><a href='#favorites'>Favoriti</a></li>";
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
            </div>
        </section>

        <!-- Section 02 -->
        <section class="background-black">
            <div class="section-wrapper">
                <ul class="text-white space-between">
                    <li><a href="#activespeakers">Kompleti razglasa</a></li>
                    <li><a href="#activespeakers">Aktivni zvučnici</a></li>
                    <li><a href="#activespeakers">Pasivni zvučnici</a></li>
                    <li><a href="#activespeakers">Monitorski zvučnici</a></li>
                    <li><a href="#activespeakers">Pojačala</a></li>
                    <li><a href="#activespeakers">Miksete</a></li>
                    <li><a href="#activespeakers">Kontroleri</a></li>
                    <li><a href="#activespeakers">Rasvjeta</a></li>
                    <li><a href="#activespeakers">Kablovi</a></li>
                    <li><a href="#activespeakers">Adapteri</a></li>
                    <li><a href="#activespeakers">Dodatna oprema</a></li>
                    <li><a href="#activespeakers">Torbe</a></li>
                </ul>
            </div>
        </section>
        <script type="text/javascript" src="js/main.js"></script>