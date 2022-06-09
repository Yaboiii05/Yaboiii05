
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
 $FID = $_POST["idForfatter"];
 $FF = $_POST["Fornavn"];
 $FE = $_POST["Etternavn"];


 $sql = "INSERT INTO Forfatter (idForfatter, Fornavn, Etternavn)
 VALUES ('$FID', '$FF', '$FE')";
 
 if($kobling->query($sql)) {
 //echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>
</body>
</html>