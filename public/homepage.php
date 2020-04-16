<?php
require "Header.php";
?>

<main id="home">
    <aside id="HomeMenulinks">
        hier slideshow
    </aside>

    <div id="h2Content">
        <h2 id="h2Home">Koop hier uw tickets</h2>

        <form method="post">
            naam*           <input type="text" name="naam" required /> <br>
            Email*          <input type="email"  name="email" required /> <br>
            soort ticket:
            basic           <input type="radio"  name="soort" value="basic"/>
            premium         <input type="radio"  name="soort" value="premium"/>
            vip             <input type="radio"  name="soort" value="vip"/> <br>
            aantal tickets  <input type="number" name="ticktes" required /> <br>
            <input type="submit" value="verzenden" />
    </div>

    <aside id="HomeMenuRechts">
        <ul>
            <li>basic </li> <h4> Normale ticket, zonder drank.</h4>
            <hr>
            <li>premium </li> <h4> Beter zicht, gratis frisdrank, gratis parkeerkaart.</h4>
            <hr>
            <li>vip </li> <h4> Geweldig zicht, gratis vrisdrank en alcolistische dranken en gratis parkeerplaats dichtbij evenement.</h4>
        </ul>
    </aside>

</main>
<?php
require "Footer.php";
?>
