<?php
session_start();
if (!isset($_SESSION["currentUserStatus"])) {
    header("location: pagenotfound.php");
    exit();
} else {
    if ($_SESSION["currentUserStatus"] != "support") {
        header("location: pagenotfound.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vokaton - Korisnička podrška</title>
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32 64x64">
    <link rel="stylesheet" href="css/controlpanel.css">
    <link rel="stylesheet" href="css/productupload-forms.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Usavršite svoj doživljaj zvuka uz Vokaton. Istražite naš odabrani izbor vrhunske audio opreme i dodataka, dostupnih za jednostavnu online kupnju.">
    <meta name="keywords" content="Audio oprema, Vrhunska tehnologija, Online kupovina, Kvaliteta zvuka">
    <meta name="author" content="Luka Vavra">
    <meta name="theme-color" content="#17a4e5">
</head>
<body>
    <div class="page-wrapper">
        <section style="margin-bottom: 0px;" id="navigationBar">
            <div class="section-wrapper-navigation">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="#messageCenter">Upiti korisnika</a></li>
                        <li><a href="#orderHistory">Povijest narudžbi</a></li>
                        <li><a href="#usersManagement">Korisnički računi</a></li>
                        <li><a href="#newsletterEmails">Newsletter</a></li>
                    </ul>
                </div>
                <div class="main-logo">
                    <a class="null-link" style="cursor: pointer;" href="index.php"><img src="images/mainLogo.png" width="180" alt="Vokaton logo"></a>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="index.php">Povratak na stranicu</a></li>
                        <li><a href="php/signout-process.php">Odjava korisničke podrške</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="background-black text-white">
            <div class="section-wrapper">
                <h1 class="welcome-message">Sustav korisničke podrške</h1>
            </div>
        </section>
        <?php
        include_once "php/messagecentersection.php";
        include_once "php/orderhistorysection.php";
        include_once "php/usermanagementsection.php";
        include_once "php/newslettersection.php";
        ?>
        <a href="#" class="back-to-top"><img alt="Gumb za povratak na vrh stranice" src="images/DropdownIcon.png" width="24"></a>
        <script type="text/javascript" src="js/main.js"></script>
        <footer>
            <section class="background-grey footer-padding">
                <div class="section-wrapper-navigation">
                    <ul class="text-black" style="margin: 0 auto;">
                        <li><a href="#usersManagement">Korisnički računi</a></li>
                        <li><a href="#userMessages">Upiti korisnika</a></li>
                        <li><a href="#orderHistory">Povijest narudžbi</a></li>
                        <li><a href="#newsletterEmails">Newsletter</a></li>
                    </ul>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>