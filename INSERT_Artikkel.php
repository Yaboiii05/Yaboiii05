<?php
// Hvis du trykker på "legg til" så kjører koden nedenfor
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
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
 $id = $_POST["id"];
 $title = $_POST["title"];
 $link = $_POST["link"];
 $id_subject = $_POST["id_subject"];
 $publish_date = $_POST["publish_date"];

$sql = "INSERT INTO artikkel (id, title, link, id_subject, publish_date) VALUES ('$id', '$title', 
'$link','$id_subject', '$publish_date')";

 if($kobling->query($sql)) {
 //echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>