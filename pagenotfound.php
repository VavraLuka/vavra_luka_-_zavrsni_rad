<?php
include_once "header.php";
?>
<section class="background-white">
    <div class="section-wrapper-returns">
        <img src="images/PageNotFound.svg" width="240">
        <h1 style="letter-spacing: -1px;">Stranica ne postoji</h1>
        <?php
        $pageNotFoundMessage = array(
            "Ups! Čini se da ne možemo pronaći ono što tražite. To je kao da tražite jednoroga - oni su čarobni, ali nažalost, ne postoje. Ne brinite, mi ćemo Vam pomoći brzo se vratiti na pravi put!",
            "Oh! Čini se da ste negdje krivo skrenuli. Bez brige, čak se i najbolji istraživači ponekad izgube. Hajde da Vas vratimo tamo gdje trebate biti. U međuvremenu uzmite kolačić i uživajte u pogledu!",
            "Pa, ovo je nezgodno. Nismo mogli pronaći stranicu koju ste tražili. To je kao da ste izgubili ključeve u snu - frustrirajuće i zbunjujuće. Ipak, ne brinite, mi smo tu da Vam pomognemo pronaći put natrag u stvarnost. Krenimo zajedno u misiju potrage i spašavanja!"
        );
        $random_number = rand(0, 2);
        if ($random_number == 0) {
            echo '<p style="text-align: center;">' . $pageNotFoundMessage[0] . '</p>';
        } elseif ($random_number == 1) {
            echo '<p style="text-align: center;">' . $pageNotFoundMessage[1] . '</p>';
        } else {
            echo '<p style="text-align: center;">' . $pageNotFoundMessage[2] . '</p>';
        }
        ?>
        <a class="back-to-main" href="index.php"><p style="text-align: center;">Povratak na glavnu stranicu</p></a>
    </div>
</section>
<?php
include_once "footer.php";
?>