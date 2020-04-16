<?php
require "Header.php";
?>

<main id="registreren">

    <aside id="registrerenMenuLinks">

    </aside>

    <div id="registrerenContent">

        <h2>registreer hier</h2>
        <form action="../private/registreren.php" method="post">
                <form action="profiel.php" method="post">
                voornaam:     <input type="text" name="voornaam" placeholder="voornaam"><br>
                achternaam:     <input type="text" name="achternaam" placeholder="achternaam"><br>
                Email-adres:        <input type="text" name="email" placeholder="Voorbeeld@gmail.com"><br>
                gebruikersnaam:     <input type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam"><br>
                Wachtwoord:         <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
                <button type="submit" name="btnRegister">registreer</button>
            </form>
        </form>
        <h2>of log hier in</h2>
        <form action="../private/database.php" method="post">
            <form action="profiel.php" method="post" >
                <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required><br>
                <input type="password" name="Wachtwoord" placeholder="wachtwoord"   required><br>
                <button type="submit" name="btnLogin">login</button>
            </form>
        </form>
    </div>


</main>
<?php
require "Footer.php";
?>

