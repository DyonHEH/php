<?php
define("DB_SERVER", "localhost");
define("DB_USER", "festival");
define("DB_PASS", "123456");
define("DB_NAME", "festivalupdate");

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)) {
        mysqli_close($connection);
    }
}



function login()
{
    if (isset($_POST['gebruikersnaam']) and isset($_POST['wachtwoord']) and isset($_POST['btnLogin'])) {
        $DB_SERVER = "localhost";
        $DB_USER = "festival";
        $DB_PASS = "123456";
        $DB_NAME = "festivalupdate";

        // Assigning POST values to variables.
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $wachtwoord = $_POST["Wachtwoord"];

        // CHECK FOR THE RECORD FROM TABLE
        $conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
        $query = "SELECT * FROM klanten WHERE gebruikersnaam ='" . $gebruikersnaam . "' and wachtwoord ='" . $wachtwoord . "'";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);


        if ($count == 1) {
            $_SESSION['login_user'] = $gebruikersnaam;
            header("location: profiel.php");
            echo "Login Credentials verified";
        } else {
            header("location: index.php");
            echo "Invalid Login Credentials";
        }
    }
}

login();

insertDB();

$db = db_connect();
$db;





$overzichtKlanten = "SELECT * FROM klanten";
$result = $db->query($overzichtKlanten);





?>



<?php
db_disconnect($db);
?>
