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
    <title>Vokaton - Audio oprema</title>
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
    <link rel="stylesheet" href="css/manufacturer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Si7wKphCgEtk8nI+jyPj/KgJ9D9R4W8Mv4D4Jg3qdi15QzSd8HvLkySsQrlYq/l3qZaJ+xHg8FyU6RbU6TVrTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
    <meta name="theme-color" content="#17a4e5">
</head>

<body>
    <div class="page-wrapper">
        <!-- Laptop & tablet navigation bar -->
        <div class="navbar-m-l">
            <header>
                <div class="section-wrapper flex-row vertical-padding-sm">
                    <div class="box">
                        <div style="width: 100%; display: flex; justify-content: flex-start;">
                            <ul class="navigation-bar text-black">
                                <li><a href="contactus.php">Kontaktiraj nas</a></li>
                                <li><a href="aboutus.php">O nama</a></li>
                            </ul>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: flex-start;">
                            <ul class="navigation-bar bold-text text-black">
                                <li><a href="index.php#topdeals">Top ponude</a></li>
                                <li><a href="index.php#new">Novo</a></li>
                                <li><a href="index.php#mostsales">Najprodavanije</a></li>
                                <li><a href="index.php#mostpopular">Top proizvodi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box main-logo">
                        <a style="cursor: pointer;" class="null-link" href="index.php"><img src="images/mainLogo.png" width="180" alt="Vokaton logo"></a>
                    </div>
                    <div class="box">
                        <div style="width: 100%; display: flex; justify-content: flex-end;">
                            <ul class="navigation-bar text-black">
                                <li><a href="warranty.php">3 godine jamstva</a></li>
                                <li><a href="returns.php">Povrat robe</a></li>
                            </ul>
                        </div>
                        <div style="width: 100%; display: flex; justify-content: flex-end;">
                            <ul class="navigation-bar text-black" style="display: flex; align-items: center;">
                                <li><a href="cart.php" style="display: flex;
    align-items: center;"><img src="images/cartIcon.png" style="margin-right: 6px;" height="24"> (<?php echo count($_SESSION['cart']); ?>)</a></li>
                                <?php
                                if (isset($_SESSION["currentUserName"])) {
                                    switch ($_SESSION["currentUserStatus"]) {
                                        case "user":
                                            echo "<li><a href='myprofile.php#profileFavorites' style='display: flex;
                                            align-items: center;'><img src='images/favoriteIcon.png' style='margin-right: 6px;' height='24'>Favoriti</a></li>";
                                            echo "<li><a href='myprofile.php' style='display: flex;
                                            align-items: center;'><img src='images/profileIcon.png' style='margin-right: 6px;' height='24'>Profil</a></li>";
                                            break;
                                        case "admin":
                                            echo "<li><a href='administration.php'>Administracija</a></li>";
                                            break;
                                        case "support":
                                            echo "<li><a href='support.php'>Korisnička podrška</a></li>";
                                            break;
                                        case "coordinator":
                                            echo "<li><a href='logistics.php'>Logistika</a></li>";
                                            break;
                                        default:
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
            </header>
            <nav class="background-black">
                <div class="section-wrapper vertical-padding-sm">
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
            </nav>
        </div>
    </div>

    <!-- Mobile navigation bar -->
    <div class="navbar-s" style="width: 100%;">
        <header style="all: unset; width: 100%; padding: 6px;">
            <div style="display: flex; justify-content: space-between; width: 80%; margin: 0 auto;">
                <a href="index.php" style="all: unset;"><img src="images/mainLogo.png" width="120" alt="Vokaton logo"></a>
                <input type="checkbox" id="menu-open" style="display: none;">
                <label for="menu-open"><img src="images/menuBars.svg" width="24" alt="Navigacijski menu"></label>
            </div>
            <ul class="mobile-horizontal-ul" style="display: flex; justify-content: space-between; margin: 0 auto; width: 60%; padding-top: 6px;">
                <li><a href="#" class="toggle-link" data-target="products">Proizvodi</a></li>
                <li><a href="#" class="toggle-link" data-target="services">Usluge</a></li>
                <li><a href="#" class="toggle-link" data-target="about">O nama</a></li>
                <li><a href="#" class="toggle-link" data-target="account">Račun</a></li>
            </ul>
        </header>
        <nav>
            <ul id="products" class="toggle-list">
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
            <ul id="services" class="toggle-list">
                <li><a href="warranty.php">3 godine jamstva</a></li>
                <li><a href="paymentoptions.php">Načini plaćanja</a></li>
                <li><a href="shipingcostsanddeliverytimes.php">Cijena i vrijeme dostave</a></li>
                <li><a href="returns.php">Povrat robe</a></li>
                <li><a href="help.php">Pomoć</a></li>
            </ul>
            <ul id="about" class="toggle-list">
                <li><a href="aboutus.php">O nama</a></li>
                <li><a href="contactus.php">Kontaktiraj nas</a></li>
            </ul>
            <ul id="account" class="toggle-list">
                <li><a href="cart.php">Košarica</a></li>
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
        </nav>
    </div>

    <a href="#" class="back-to-top"><img src="images/DropdownIcon.png" width="24" alt="Gumb za povratak na vrh stranice"></a>
    <script type="text/javascript" src="js/main.js"></script>