<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="VærDataNettside.css">
</head>
<title>Digital arbeidsbok</title>
<style>
</style>

<body>
<h1 class="header">Temperatur in klasserom på Amalie Skram VGS</h1>

<div class="grid-container">

<!-- Dropdown meny start-->
<div class="grid-item meny">
<div class="dropdown">
  <img src="Bilder\menu.png" class="bildegalleri_meny">
    <div class="dropdown-content">
	<a href="index.html">Tilbake til startsiden</a>
	<br>	
    <a href="Oppgave">Oppgave</a>
    <a href="Logg">Logg</a>
    <a href="Datamodell">Datamodell</a>
    </div>
</div>
</div>  
<!-- Dropdown meny slutt-->

   <div class="grid-item">Rom 352<br><br>
  </div>
  
  <div class="grid-item">Temperatur<br><br>
  </div>
  
  <div class="grid-item">Dato/Tid<br><br>
  </div>


</body>
</html>

<?php
 // Tilkoblingsinformasjon
 $tjener = "piasvg.mysql.database.azure.com";
 $brukernavn = "fiskesuppe";
 $passord = "fishsoup2002";
 $database = "fiskesuppe";
 // Opprette en kobling

 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
  die ("Noe gikk galt: " . $kobling->connect_error) ;
} else {
  echo "Koblingen virker.";
}


//Norsk: Inkluderer bokstaver som Æ, Ø Å
$kobling->set_charset("utf8");


$sql = "SELECT F.idForfatter, F.Fornavn, F.Etternavn, A.id, A.title, A.link, A.id_subject, A.publish_date
FROM maindatabase.Forfatter F, maindatabase.Artikkel A, maindatabase.Forfatter_has_Artikkel FA
WHERE F.idForfatter=FA.Forfatter_idForfatter
AND A.id=FA.Artikkel_id";


$resultat = $kobling->query($sql);

