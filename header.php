<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Vokaton - Trgovina audio opreme</title>
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32 64x64">
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
    <link rel="stylesheet" href="css/highlightedproducts.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/passwordrecovery.css">
    <link rel="stylesheet" href="css/help.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Si7wKphCgEtk8nI+jyPj/KgJ9D9R4W8Mv4D4Jg3qdi15QzSd8HvLkySsQrlYq/l3qZaJ+xHg8FyU6RbU6TVrTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-D5H+bZDzFngvfu9gMz8JfwhCgeY6zlBfb6Uonb6U0nk7c0r1rHvAlhXm2iE7yFXC6YB+6UNgU6hD8rZBn1bC/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
</head>

<body>
    <div class="page-wrapper">
        <!-- Section 01 - navigation bar -->
        <section class="background-grey">
            <div class="section-wrapper">
                <div class="box">
                    <div class="inner-box">
                        <ul class="navigation-bar text-black">
                            <li><a href="contactus.php">Kontaktiraj nas</a></li>
                            <li><a href="aboutus.php">O nama</a></li>
                        </ul>
                    </div>
                    <div class="inner-box">
                        <ul class="navigation-bar bold-text text-black">
                            <li><a href="index.php#topdeals">Top ponude</a></li>
                            <li><a href="index.php#new">Novo</a></li>
                            <li><a href="index.php#mostsales">Najprodavanije</a></li>
                            <li><a href="index.php#mostpopular">Top proizvodi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box main-logo">
                    <p><a href="index.php"><img src="images/mainLogo.png" width="180"></a></p>
                </div>
                <div class="box">
                    <div class="inner-box">
                        <ul class="navigation-bar float-right text-black">
                            <li><a href="warranty.php">3 godine jamstva</a></li>
                            <li><a href="returns.php">Povrat robe</a></li>
                        </ul>
                    </div>
                    <div class="inner-box">
                        <ul class="navigation-bar float-right text-black">
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
        <section class="background-black">
            <div class="section-wrapper">
                <ul class="text-white space-between">
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=speakerBundle">Kompleti razglasa</a></li>
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=activeSpeaker">Aktivni zvučnici</a></li>
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=passiveSpeaker">Pasivni zvučnici</a></li>
                    <li><a href="filteredproducts.php?productCategory=speakers&speakerType=monitorSpeaker">Monitorski zvučnici</a></li>
                    <li><a href="filteredproducts.php?productCategory=amplifiers">Pojačala</a></li>
                    <li><a href="filteredproducts.php?productCategory=mixers">Miksete</a></li>
                    <li><a href="filteredproducts.php?productCategory=controllers">Kontroleri</a></li>
                    <li><a href="filteredproducts.php?productCategory=light">Rasvjeta</a></li>
                    <li><a href="filteredproducts.php?productCategory=cables">Kablovi</a></li>
                    <li><a href="filteredproducts.php?productCategory=adapters">Adapteri</a></li>
                    <li><a href="filteredproducts.php?productCategory=accessories">Dodatna oprema</a></li>
                    <li><a href="filteredproducts.php?productCategory=covers">Torbe</a></li>
                    <li><a href="filteredproducts.php?productCategory=all">Svi proizvodi</a></li>
                </ul>
            </div>
        </section>
        <a href="#" class="back-to-top"><img src="images/DropdownIcon.png" width="24"></a>
        <script type="text/javascript" src="js/main.js"></script>