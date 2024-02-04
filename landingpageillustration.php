<section class="background-white text-black">
    <?php
    if(isset($_GET["userdelete"])){
        if($_GET["userdelete"] == "success"){
            echo "<p style='text-align: center;'>Korisnički račun je uspješno obrisan.</p><br>";
        }
    }
    ?>
    <div style="width: 60%; margin:  auto;">
        <img src="images/landingPageIllustration.svg" style="width: 100%;">
    </div><br class="tablet-breakline">
</section>