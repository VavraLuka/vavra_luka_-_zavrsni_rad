<?php
session_start();
if (!isset($_SESSION["currentUserStatus"])) {
    header("location: pagenotfound.php");
    exit();
} else {
    if ($_SESSION["currentUserStatus"] != "coordinator") {
        header("location: pagenotfound.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Vokaton - Logistički centar</title>
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
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#manufacturerManagement">Uređivanje proizvođača</a></li>
                    </ul>
                </div>
                <div class="main-logo">
                    <a class="null-link" style="cursor: pointer;" href="index.php"><img src="images/mainLogo.png" width="180" alt="Vokaton logo"></a>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="index.php">Povratak na stranicu</a></li>
                        <li><a href="php/signout-process.php">Odjava logistike</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="background-black text-white">
            <div class="section-wrapper">
                <h1 class="welcome-message">Logistički sustav web trgovine</h1>
            </div>
        </section>

        <?php
        include_once "php/productuploadsection.php";
        include_once "php/productmanagementsection.php";
        include_once "php/manufacturersection.php"
        ?>

        <a href="#" class="back-to-top"><img alt="Gumb za povratak na vrh stranice" src="images/DropdownIcon.png" width="24"></a>
        <script type="text/javascript" src="js/main.js"></script>

        <!-- Footer -->
        <footer>
            <section class="background-grey footer-padding">
                <div class="section-wrapper-navigation">
                    <ul class="text-black" style="margin: 0 auto;">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#manufacturerManagement">Uređivanje proizvođača</a></li>
                    </ul>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>