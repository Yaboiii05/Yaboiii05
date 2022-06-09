<?php
// Hvis du trykker på "legg til" så kjører koden nedenfor
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 // Localhost = databasen ligger på lokal pc
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "maindatabase";
 $port = "8889";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 //Norsk: Inkluderer bokstaver som Æ, Ø Å
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $AID = $_POST["id"];
 $FID = $_POST["idForfatter"];


 $sql = "INSERT INTO Forfatter_has_Artikkel(Forfatter_idForfatter, Artikkel_id) VALUES
('$FID', '$AID')";
 if($kobling->query($sql)) {
 //echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>