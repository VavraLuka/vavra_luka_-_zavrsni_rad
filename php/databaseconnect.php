<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "vavra_luka_-_zavrsni_rad";

    $dbc = mysqli_connect($hostname, $username, $password, $database) or
    die('Greška prilikom spajanja na bazu podataka.' . mysqli_connect_error());