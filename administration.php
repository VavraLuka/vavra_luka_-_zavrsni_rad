<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Audio trgovina - Administracija</title>
    <link rel="stylesheet" href="css/administration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>

<body>
    <div class="page-wrapper">
        <!-- Navigation bar -->
        <section class="background-grey" id="navigationBar">
            <div class="section-wrapper-navigation">
                <div class="box">
                    <ul class="text-black">
                        <li><a href="#productUpload">Unos proizvoda</a></li>
                        <li><a href="#productManagement">Uređivanje proizvoda</a></li>
                        <li><a href="#usersManagement">Upravljanje korisničkim računima</a></li>
                    </ul>
                </div>
                <div class="box">
                    <ul class="float-right text-black">
                        <li><a href="index.php">Povratak na stranicu</a></li>
                        <li><a href="php/signout-process.php">Odjava administratora</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Welcome message -->
        <section class="background-black text-white">
            <div class="section-wrapper">
                <h1 class="welcome-message">Administracijski sustav web trgovine</h1>
            </div>
        </section>
        <!-- Product upload -->
        <section id="productUpload">
            <div class="section-wrapper">
                <h2>Unos novog proizvoda u bazu podataka</h2>
                <form method="GET" action="administration.php">
                    <select class="input-product-category" name="productCategory" id="productCategory">
                        <option value="" disabled selected hidden>Kategorija proizvoda</option>
                        <option value="speakers">Zvučnici</option>
                        <option value="amplifiers">Pojačala</option>
                        <option value="mixers">Miksete</option>
                        <option value="controllers">Kontroleri</option>
                        <option value="light">Rasvjeta</option>
                        <option value="cables">Kablovi</option>
                        <option value="adapters">Adapteri</option>
                        <option value="accessories">Dodatna oprema</option>
                        <option value="covers">Torbe</option>
                    </select>
                    <div class="form-button">
                        <input type="submit" name="submit" value="Dodaj proizvod">
                    </div>
                </form>
            </div>
        </section>
        <!-- Product management -->
        <section id="productManagement">
            <div class="section-wrapper">
                <h2>Uređivanje proizvoda u bazi podataka</h2>
            </div>
        </section>
        <!-- Users management -->
        <section id="usersManagement">
            <div class="section-wrapper">
                <h2>Upravljanje korisničkim računima iz baze podataka</h2>
            </div>
        </section>
        <!-- Footer -->
        <section>
            <button>Povratak na vrh</button>
        </section>
    </div>
</body>

</html>