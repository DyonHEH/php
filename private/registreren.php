<?php require_once('database.php');
session_start();


function insertDB()
{
    if (isset($_POST['btnRegister'])) {
        $DB_SERVER = "localhost";
        $DB_USER = "festival";
        $DB_PASS = "123456";
        $DB_NAME = "festivalupdate";

        //userChecks
        $gebruikersnaamCheck = "SELECT gebruikersnaam FROM klanten";


        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $Gebruikersnaam = $_POST["Gebruikersnaam"];
        $wachtwoord = $_POST["wachtwoord"];


        $conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
        $sqlInsert = "INSERT INTO klanten(voornaam, achternaam, email, gebruikersnaam, wachtwoord) VALUES ('$voornaam', '$achternaam', '$email', '$Gebruikersnaam', '$wachtwoord')";
        $result = mysqli_query($conn, $sqlInsert);

        if ($Gebruikersnaam == $gebruikersnaamCheck) {
            echo "deze gebruikersnaam bestaat al";
        } else {
            if ($result) {

                echo "Records added successfully.";
                header("location: ../public/profiel.php");
            } else {

                echo "ERROR: Could not able to send data ";
                echo "Connect failed: %s\n" . $conn->error;
            }
        }
    }
}